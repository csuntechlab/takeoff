import Vue from 'vue'
import VueRouter from 'vue-router'

//Pages
import Login from "./views/Login"
import SignUp from "./views/SignUp"

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
        {
            path: '/signup',
            component: SignUp,
            meta: {
                title: 'Sign Up | Badges'
            }
        },
    ]
});

export default router
