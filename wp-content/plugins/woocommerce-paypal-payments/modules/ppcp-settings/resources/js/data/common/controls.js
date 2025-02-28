/**
 * Controls: Implement side effects, typically asynchronous operations.
 *
 * Controls use ACTION_TYPES keys as identifiers.
 * They are triggered by corresponding actions and handle external interactions.
 *
 * @file
 */

import apiFetch from '@wordpress/api-fetch';

import {
	REST_CONNECTION_URL_PATH,
	REST_HYDRATE_MERCHANT_PATH,
	REST_MANUAL_CONNECTION_PATH,
	REST_PERSIST_PATH,
	REST_REFRESH_FEATURES_PATH,
	REST_WEBHOOKS,
	REST_WEBHOOKS_SIMULATE,
} from './constants';
import ACTION_TYPES from './action-types';

export const controls = {
	async [ ACTION_TYPES.DO_PERSIST_DATA ]( { data } ) {
		try {
			await apiFetch( {
				path: REST_PERSIST_PATH,
				method: 'POST',
				data,
			} );
		} catch ( error ) {
			console.error( 'Error saving data.', error );
		}
	},

	async [ ACTION_TYPES.DO_SANDBOX_LOGIN ]() {
		try {
			return apiFetch( {
				path: REST_CONNECTION_URL_PATH,
				method: 'POST',
				data: {
					environment: 'sandbox',
					products: [ 'EXPRESS_CHECKOUT' ], // Sandbox always uses EXPRESS_CHECKOUT.
				},
			} );
		} catch ( e ) {
			return {
				success: false,
				error: e,
			};
		}
	},

	async [ ACTION_TYPES.DO_PRODUCTION_LOGIN ]( { products } ) {
		try {
			return apiFetch( {
				path: REST_CONNECTION_URL_PATH,
				method: 'POST',
				data: {
					environment: 'production',
					products,
				},
			} );
		} catch ( e ) {
			return {
				success: false,
				error: e,
			};
		}
	},

	async [ ACTION_TYPES.DO_MANUAL_CONNECTION ]( {
		clientId,
		clientSecret,
		useSandbox,
	} ) {
		try {
			return await apiFetch( {
				path: REST_MANUAL_CONNECTION_PATH,
				method: 'POST',
				data: {
					clientId,
					clientSecret,
					useSandbox,
				},
			} );
		} catch ( e ) {
			return {
				success: false,
				error: e,
			};
		}
	},

	async [ ACTION_TYPES.DO_REFRESH_MERCHANT ]() {
		try {
			return await apiFetch( { path: REST_HYDRATE_MERCHANT_PATH } );
		} catch ( e ) {
			return {
				success: false,
				error: e,
			};
		}
	},

	async [ ACTION_TYPES.DO_REFRESH_FEATURES ]() {
		try {
			return await apiFetch( {
				path: REST_REFRESH_FEATURES_PATH,
				method: 'POST',
			} );
		} catch ( e ) {
			return {
				success: false,
				error: e,
				message: e.message,
			};
		}
	},

	async [ ACTION_TYPES.DO_RESUBSCRIBE_WEBHOOKS ]() {
		return await apiFetch( {
			method: 'POST',
			path: REST_WEBHOOKS,
		} );
	},

	async [ ACTION_TYPES.DO_START_WEBHOOK_SIMULATION ]() {
		return await apiFetch( {
			method: 'POST',
			path: REST_WEBHOOKS_SIMULATE,
		} );
	},

	async [ ACTION_TYPES.DO_CHECK_WEBHOOK_SIMULATION_STATE ]() {
		return await apiFetch( {
			path: REST_WEBHOOKS_SIMULATE,
		} );
	},
};
