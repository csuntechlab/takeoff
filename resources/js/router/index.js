import Vue from 'vue'
import VueRouter from 'vue-router'

//Pages

Vue.use(VueRouter)
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            component: Login,
            meta: {
                title: 'Login | Badges'
            }
        },
    ]
});
