/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * Vue plugins
 */

import router from './router/index';
import store from './store/index';

// import Vuetify from 'vuetify';
// import InfiniteLoading from 'vue-infinite-loading';
// import { DynamicScroller, DynamicScrollerItem } from 'vue-virtual-scroller';

// window.Vue.use(Vuetify);
// window.Vue.use(InfiniteLoading);
// Vue.component('DynamicScroller', DynamicScroller);
// Vue.component('DynamicScrollerItem', DynamicScrollerItem);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('navigation-bar', require('./components/Layout/NavigationBar.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Enable dev-mode in non-production environment
if (window.debugMode) {
    window.Vue.config.devtools = true;
}

const app = new Vue({
    el: '#app',
    router,
    store,
    // vuetify : new Vuetify(),
});

/**
 * To maintain a reference to app so that it
 * can be accessed or replaced from anywhere.
 *
 * As a matter of efficiency, try to destroy
 * the current app and then replace it.
 */
window.app = app;
