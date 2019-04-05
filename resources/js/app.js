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

import Vue from "vue";
import router from "./router";
import store from "./store";
import App from "./App.vue";
import "../sass/app.scss";
import Vuelidate from "vuelidate";

Vue.use(Vuelidate);

const app = new Vue({
    el: "#app",
    store,
    router,
    render: h => h(App)
});

export default app;
