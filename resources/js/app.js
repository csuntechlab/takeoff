window._ = require("lodash");
window.axios = require("axios");
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
require('@fortawesome/fontawesome-free/js/all.js');
let token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    window.axios.defaults.headers.common["X-CSRF-TOKEN"] = token.content;
} else {
    console.error(
        "CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token"
    );
}

/**
 * Let's add the app-url to axios and save it for future use.
 *
 */
let url = document.head.querySelector('meta[name="app-url"]');

if (url) {
    window.axios.defaults.baseURL = url.content;
    window.baseUrl = url.content;
} else {
    console.error('Please set the app URL as a meta tag');
}

import Vue from "vue";
import router from "./router";
import store from "./store";
import App from "./App.vue";
import "../sass/app.scss";
import Vuelidate from "vuelidate";
import VuePaginate from 'vue-paginate'

Vue.use(Vuelidate);
Vue.use(VuePaginate)

const app = new Vue({
    el: "#app",
    store,
    router,
    render: h => h(App)
});

export default app;
