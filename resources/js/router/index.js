import Vue from "vue";
import VueRouter from "vue-router";

//Pages
import Login from "./views/Login";
import Signup from "./views/SignUp";
import AccountSetup from "./views/AccountSetup";
import ProfileSetup from "./views/ProfileSetup";
import StudentProfile from "./views/StudentProfile";
import Dashboard from "./views/Dashboard";

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
        }
    ]
});

export default router;
