
import Vue from 'vue';
import Vuex from 'vuex';

import UserStore from './modules/user.store';

Vue.use(Vuex);

const debug = process.env.MIX_APP_ENV !== 'production';

export default new Vuex.Store({
    modules: {
        UserStore,
    },
    strict: debug,
    plugins: debug ? [] : [],
})
