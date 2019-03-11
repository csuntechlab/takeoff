import Vue from 'vue'
import VueRouter from 'vue-router'

//Pages
import Login from "./views/Login"
import Signup from "./views/SignUp"
import StudentProfile from "./views/StudentProfile"

Vue.use(VueRouter)
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/login',
            component: Login,
            meta: {
                title: 'Login | Takeoff'
            }
        },
        {
            path: '/signup',
            component: Signup,
            meta: {
                title: 'Sign Up | Takeoff'
            }
        },
        {
            path: '/profile',
            component: StudentProfile,
            meta: {
                title: 'Profile | Takeoff'
            }
        }
    ]
});

export default router
