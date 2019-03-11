import Vue from 'vue'
import VueRouter from 'vue-router'

//Pages
import Login from "./views/Login"
import Signup from "./views/Signup"
import ProfileSetup from "./views/ProfileSetup"
import FinishSetup from "./views/FinishSetup"


Vue.use(VueRouter)
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/login',
            component: Login,
            meta: {
                title: 'Login | Badges'
            }
        },
        {
            path: '/signup',
            component: Signup,
            meta: {
                title: 'Sign Up | Badges'
            }
        },
        {
            path: '/profilesetup',
            component: ProfileSetup,
            meta: {
                title: 'Profile Setup | Badges'
            } 
        },
        {
            path: '/finishsetup',
            component: FinishSetup,
            meta: {
                title: 'Finish Setup | Badges'
            } 
        }
    ]
});

export default router
