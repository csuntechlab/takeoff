require('./bootstrap');

import Vue from 'vue';
import router from './router';
import store from './store';

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    store,
    router,
    render: h => h(App)
});

export default app
