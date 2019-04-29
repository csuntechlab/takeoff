import Vue from "vue"
import VueRouter from "vue-router"

// Auth & User Setup
import Login from "./views/Login"
import Signup from "./views/SignUp"
import AccountSetup from "./views/AccountSetup"
import ProfileSetup from "./views/ProfileSetup"
import AdminSetup from "./views/AdminSetup"

// Profiles
import StudentProfile from "./views/StudentProfile"
import EditProfile from "./views/EditProfile"
import Roster from "./views/Roster"

// Dashboard
import Dashboard from "./views/Dashboard"
import DashboardAdmin from "./views/DashboardAdmin"

// Workshops
import Workshop from "./views/Workshop"

// Misc
import ErrorPage from "./views/ErrorPage"

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
            path: "/profile/",
            component: StudentProfile,
            meta: {
                title: "Profile | Takeoff",
                header: "Edgar's Profile"
            },
            props: true
        },
        {
            path: "/edit-profile",
            component: EditProfile,
            meta: {
                title: "Edit Profile | Takeoff",
                header: "Edit Your Profile"
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
            path: "/admin-setup",
            component: AdminSetup,
            meta: {
                title: "Admin Setup | Takeoff",
                header: "Administrator Information"
            }
        },
        {
            path: "/roster",
            component: Roster,
            meta: {
                title: "Roster | Takeoff",
                header: "Roster"
            }
        },
        {
            path: "/dashboard",
            component: DashboardAdmin,
            meta: {
                title: "Dashboard | Takeoff",
                header: "Dashboard"
            }
        },
        {
            path: "/workshop/id",
            component: Workshop,
            meta: {
                title: "Workshop | Takeoff",
                header: "Workshop"
            },
            props: true
        },
        {
            path: "*",
            component: ErrorPage,
            meta: {
                title: 'Whoops!',
                header: 'Page Not Found'
            }
        }
    ]
});

export default router;
