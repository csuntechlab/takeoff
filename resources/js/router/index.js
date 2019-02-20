import Vue from 'vue'
import VueRouter from 'vue-router'

//Pages
import Login from "./views/Login"

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

export default router
