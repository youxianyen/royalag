import { createReduxStore, register } from '@wordpress/data';
import { controls as wpControls } from '@wordpress/data-controls';

import { STORE_NAME } from './constants';
import reducer from './reducer';
import * as selectors from './selectors';
import * as actions from './actions';
import * as hooks from './hooks';
import { resolvers } from './resolvers';
import { controls } from './controls';

export const initStore = () => {
	const store = createReduxStore( STORE_NAME, {
		reducer,
		controls: { ...wpControls, ...controls },
		actions,
		selectors,
		resolvers,
	} );

	register( store );
};

export { hooks, selectors, STORE_NAME };
