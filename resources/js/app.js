require('./bootstrap');

import Vue from 'vue';
import '../../node_modules/vuetify/dist/vuetify.min.css'
import Vuetify, {
    VApp,
    VDatePicker,
    VStepper,
    VTooltip,
    VProgressCircular,
    VCalendar
} from 'vuetify/lib'
import router from './router';
import store from './store';
import App from './App.vue';

Vue.use(Vuetify, {
    components: {
        VApp,
        VDatePicker,
        VStepper,
        VTooltip,
        VProgressCircular,
        VCalendar
    }
});

Vue.component('ExampleComponent', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    store,
    router,
    render: h => h(App)
});

export default app
