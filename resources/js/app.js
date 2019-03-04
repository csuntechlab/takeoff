import Vue from 'vue';
import router from './router';
import store from './store';
import App from './App.vue';
import '../sass/app.scss'

Vue.component('ExampleComponent', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    store,
    router,
    render: h => h(App)
});

export default app
