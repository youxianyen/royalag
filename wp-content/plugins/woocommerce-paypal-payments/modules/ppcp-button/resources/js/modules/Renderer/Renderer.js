import merge from 'deepmerge';
import { loadScript } from '@paypal/paypal-js';
import { keysToCamelCase } from '../Helper/Utils';
import widgetBuilder from './WidgetBuilder';
import { normalizeStyleForFundingSource } from '../Helper/Style';
import {
	handleShippingOptionsChange,
	handleShippingAddressChange,
} from '../Helper/ShippingHandler.js';
import { PaymentContext } from '../Helper/CheckoutMethodState';

class Renderer {
	constructor(
		creditCardRenderer,
		defaultSettings,
		onSmartButtonClick,
		onSmartButtonsInit
	) {
		this.defaultSettings = defaultSettings;
		this.creditCardRenderer = creditCardRenderer;
		this.onSmartButtonClick = onSmartButtonClick;
		this.onSmartButtonsInit = onSmartButtonsInit;

		this.buttonsOptions = {};
		this.onButtonsInitListeners = {};

		this.renderedSources = new Set();

		this.reloadEventName = 'ppcp-reload-buttons';
	}

	/**
	 * Determine is PayPal smart buttons are used by inspecting the existing plugin configuration:
	 * If the url-param "components" contains a "buttons" element, smart buttons are enabled.
	 *
	 * @return {boolean} True, if smart buttons are present on the page.
	 */
	get useSmartButtons() {
		if ( PaymentContext.Preview === this.defaultSettings?.context ) {
			return true;
		}

		const components = this.defaultSettings?.url_params?.components || '';

		return components.split( ',' ).includes( 'buttons' );
	}

	render(
		contextConfig,
		settingsOverride = {},
		contextConfigOverride = () => {}
	) {
		const settings = merge( this.defaultSettings, settingsOverride );

		const enabledSeparateGateways = Object.fromEntries(
			Object.entries( settings.separate_buttons ).filter(
				( [ s, data ] ) => document.querySelector( data.wrapper )
			)
		);
		const hasEnabledSeparateGateways =
			Object.keys( enabledSeparateGateways ).length !== 0;

		if ( ! hasEnabledSeparateGateways ) {
			if ( this.useSmartButtons ) {
				this.renderButtons(
					settings.button.wrapper,
					settings.button.style,
					contextConfig,
					hasEnabledSeparateGateways
				);
			}
		} else {
			// render each button separately
			for ( const fundingSource of paypal
				.getFundingSources()
				.filter( ( s ) => ! ( s in enabledSeparateGateways ) ) ) {
				const style = normalizeStyleForFundingSource(
					settings.button.style,
					fundingSource
				);

				this.renderButtons(
					settings.button.wrapper,
					style,
					contextConfig,
					hasEnabledSeparateGateways,
					fundingSource
				);
			}
		}

		if ( this.creditCardRenderer ) {
			this.creditCardRenderer.render(
				settings.hosted_fields.wrapper,
				contextConfigOverride
			);
		}

		for ( const [ fundingSource, data ] of Object.entries(
			enabledSeparateGateways
		) ) {
			this.renderButtons(
				data.wrapper,
				data.style,
				contextConfig,
				hasEnabledSeparateGateways,
				fundingSource
			);
		}
	}

	renderButtons(
		wrapper,
		style,
		contextConfig,
		hasEnabledSeparateGateways,
		fundingSource = null
	) {
		if (
			! document.querySelector( wrapper ) ||
			this.isAlreadyRendered(
				wrapper,
				fundingSource,
				hasEnabledSeparateGateways
			)
		) {
			// Try to render registered buttons again in case they were removed from the DOM by an external source.
			widgetBuilder.renderButtons( [ wrapper, fundingSource ] );
			return;
		}

		if ( fundingSource ) {
			contextConfig.fundingSource = fundingSource;
		}

		let venmoButtonClicked = false;

		const buttonsOptions = () => {
			const options = {
				style,
				...contextConfig,
				onClick: ( data, actions ) => {
					if ( this.onSmartButtonClick ) {
						this.onSmartButtonClick( data, actions );
					}

					venmoButtonClicked = false;
					if ( data.fundingSource === 'venmo' ) {
						venmoButtonClicked = true;
					}
				},
				onInit: ( data, actions ) => {
					if ( this.onSmartButtonsInit ) {
						this.onSmartButtonsInit( data, actions );
					}
					this.handleOnButtonsInit( wrapper, data, actions );
				},
			};

			// Check the condition and add the handler if needed
			if ( this.shouldEnableShippingCallback() ) {
				options.onShippingOptionsChange = ( data, actions ) => {
					const shippingOptionsChange =
					! this.isVenmoButtonClickedWhenVaultingIsEnabled(
						venmoButtonClicked
					)
						? handleShippingOptionsChange(
								data,
								actions,
								this.defaultSettings
						  )
						: null;

					return shippingOptionsChange;
				};
				options.onShippingAddressChange = ( data, actions ) => {
					const shippingAddressChange =
					! this.isVenmoButtonClickedWhenVaultingIsEnabled(
						venmoButtonClicked
					)
						? handleShippingAddressChange(
								data,
								actions,
								this.defaultSettings
						  )
						: null;

					return shippingAddressChange;
				};
			}

			return options;
		};

		jQuery( document )
			.off( this.reloadEventName, wrapper )
			.on(
				this.reloadEventName,
				wrapper,
				( event, settingsOverride = {}, triggeredFundingSource ) => {
					// Only accept events from the matching funding source
					if (
						fundingSource &&
						triggeredFundingSource &&
						triggeredFundingSource !== fundingSource
					) {
						return;
					}

					const settings = merge(
						this.defaultSettings,
						settingsOverride
					);
					let scriptOptions = keysToCamelCase( settings.url_params );
					scriptOptions = merge(
						scriptOptions,
						settings.script_attributes
					);

					loadScript( scriptOptions ).then( ( paypal ) => {
						widgetBuilder.setPaypal( paypal );
						widgetBuilder.registerButtons(
							[ wrapper, fundingSource ],
							buttonsOptions()
						);
						widgetBuilder.renderAll();
					} );
				}
			);

		this.renderedSources.add( wrapper + ( fundingSource ?? '' ) );

		if (
			typeof paypal !== 'undefined' &&
			typeof paypal.Buttons !== 'undefined'
		) {
			widgetBuilder.registerButtons(
				[ wrapper, fundingSource ],
				buttonsOptions()
			);
			widgetBuilder.renderButtons( [ wrapper, fundingSource ] );
		}
	}

	isVenmoButtonClickedWhenVaultingIsEnabled = ( venmoButtonClicked ) => {
		return venmoButtonClicked && this.defaultSettings.vaultingEnabled;
	};

    shouldEnableShippingCallback = () => {
		const needShipping =
			this.defaultSettings.needShipping ||
			this.defaultSettings.context === 'product';
		return (
			this.defaultSettings.should_handle_shipping_in_paypal &&
			needShipping
		);
    };

	isAlreadyRendered( wrapper, fundingSource ) {
		return this.renderedSources.has( wrapper + ( fundingSource ?? '' ) );
	}

	disableCreditCardFields() {
		this.creditCardRenderer.disableFields();
	}

	enableCreditCardFields() {
		this.creditCardRenderer.enableFields();
	}

	onButtonsInit( wrapper, handler, reset ) {
		this.onButtonsInitListeners[ wrapper ] = reset
			? []
			: this.onButtonsInitListeners[ wrapper ] || [];
		this.onButtonsInitListeners[ wrapper ].push( handler );
	}

	handleOnButtonsInit( wrapper, data, actions ) {
		this.buttonsOptions[ wrapper ] = {
			data,
			actions,
		};

		if ( this.onButtonsInitListeners[ wrapper ] ) {
			for ( const handler of this.onButtonsInitListeners[ wrapper ] ) {
				if ( typeof handler === 'function' ) {
					handler( {
						wrapper,
						...this.buttonsOptions[ wrapper ],
					} );
				}
			}
		}
	}

	disableSmartButtons( wrapper ) {
		if ( ! this.buttonsOptions[ wrapper ] ) {
			return;
		}
		try {
			this.buttonsOptions[ wrapper ].actions.disable();
		} catch ( err ) {
			console.log( 'Failed to disable buttons: ' + err );
		}
	}

	enableSmartButtons( wrapper ) {
		if ( ! this.buttonsOptions[ wrapper ] ) {
			return;
		}
		try {
			this.buttonsOptions[ wrapper ].actions.enable();
		} catch ( err ) {
			console.log( 'Failed to enable buttons: ' + err );
		}
	}
}

export default Renderer;
