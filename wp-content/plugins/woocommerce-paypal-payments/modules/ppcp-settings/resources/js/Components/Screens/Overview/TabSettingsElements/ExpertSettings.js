import { __ } from '@wordpress/i18n';
import SettingsCard from '../../../ReusableComponents/SettingsCard';
import {
	Content,
	ContentWrapper,
} from '../../../ReusableComponents/SettingsBlocks';
import Sandbox from './Blocks/Sandbox';
import Troubleshooting from './Blocks/Troubleshooting/Troubleshooting';
import PaypalSettings from './Blocks/PaypalSettings';
import OtherSettings from './Blocks/OtherSettings';

const ExpertSettings = ( { updateFormValue, settings } ) => {
	return (
		<SettingsCard
			icon="icon-settings-expert.svg"
			className="ppcp-r-settings-card ppcp-r-settings-card--expert-settings"
			title={ __( 'Expert Settings', 'woocommerce-paypal-payments' ) }
			description={ __(
				'Fine-tune your PayPal experience with advanced options.',
				'woocommerce-paypal-payments'
			) }
			actionProps={ {
				callback: updateFormValue,
				key: 'payNowExperience',
			} }
			contentContainer={ false }
		>
			<ContentWrapper>
				<Content>
					<Sandbox
						updateFormValue={ updateFormValue }
						settings={ settings }
					/>
				</Content>

				<Content>
					<Troubleshooting
						updateFormValue={ updateFormValue }
						settings={ settings }
					/>
				</Content>

				<Content>
					<PaypalSettings
						updateFormValue={ updateFormValue }
						settings={ settings }
					/>
				</Content>

				<Content>
					<OtherSettings
						updateFormValue={ updateFormValue }
						settings={ settings }
					/>
				</Content>
			</ContentWrapper>
		</SettingsCard>
	);
};

export default ExpertSettings;
