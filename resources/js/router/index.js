import Vue from "vue"
import VueRouter from "vue-router"

//Pages
import Login from "./views/Student/Login"
import Signup from "./views/Student/SignUp"
import AccountSetup from "./views/Student/AccountSetup"
import ProfileSetup from "./views/Student/ProfileSetup"
import StudentProfile from "./views/Student/StudentProfile"
import Dashboard from "./views/Student/Dashboard"
import ErrorPage from "./views/Student/ErrorPage"
import Dashboard from "./views/Admin/Dashboard"

Vue.use(VueRouter);
const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/login",
            component: Login,
            meta: {
                title: "Login | Takeoff",
                header: "Takeoff"
            }
        },
        {
            path: "/signup",
            component: Signup,
            meta: {
                title: "Sign Up | Takeoff",
                header: "Takeoff"
            }
        },
        {
            path: "/account-setup",
            component: AccountSetup,
            meta: {
                title: "Account Setup | Badges",
                header: "Account Information"
            }
        },
        {
            path: "/profile-setup",
            component: ProfileSetup,
            meta: {
                title: "Profile Setup | Badges",
                header: "Set Up Your Profile"
            }
        },
        {
            path: "/",
            component: Dashboard,
            meta: {
                title: "Dashboard | Takeoff",
                header: "Dashboard"
            }
        },
        {
            path: "/profile",
            component: StudentProfile,
            meta: {
                title: "Profile | Takeoff",
                header: "[Student] Profile"
            }
        },
        {
            path: "*",
            component: ErrorPage,
            meta: {
                title: 'Whoops!',
                header: 'Page Not Found'
            }

        },
        {
            path: "/dashboard",
            component: Dashboard,
            meta: {
                title: "Dashboard | Takeoff",
                header: "Dashboard"
            }
        }

    ]
});

export default router;
