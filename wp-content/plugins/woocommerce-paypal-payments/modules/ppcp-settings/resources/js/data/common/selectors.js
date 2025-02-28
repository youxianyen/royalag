/**
 * Selectors: Extract specific pieces of state from the store.
 *
 * These functions provide a consistent interface for accessing store data.
 * They allow components to retrieve data without knowing the store structure.
 *
 * @file
 */

const EMPTY_OBJ = Object.freeze( {} );

const getState = ( state ) => state || EMPTY_OBJ;

export const persistentData = ( state ) => {
	return getState( state ).data || EMPTY_OBJ;
};

export const transientData = ( state ) => {
	const { data, merchant, wooSettings, ...transientState } =
		getState( state );
	return transientState || EMPTY_OBJ;
};

export const getActivityList = ( state ) => {
	const { activities = new Map() } = state;
	return Object.fromEntries( activities );
};

export const merchant = ( state ) => {
	return getState( state ).merchant || EMPTY_OBJ;
};

export const wooSettings = ( state ) => {
	return getState( state ).wooSettings || EMPTY_OBJ;
};

export const webhooks = ( state ) => {
	return getState( state ).webhooks || EMPTY_OBJ;
};
