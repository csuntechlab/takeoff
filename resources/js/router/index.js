import Vue from "vue";
import VueRouter from "vue-router";
import store from "../store";

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
import WorkshopCreation from "./views/WorkshopCreation"


Vue.use(VueRouter);
const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            redirect: { path: "/dashboard" }
        },
        {
            path: "/login",
            component: Login,
            meta: {
                title: "Login | Takeoff",
                header: "Takeoff",
                noAuth: true
            },

            //Breaks when logging out
            beforeEnter: (to, from, next) => {
                if (window.localStorage.getItem("token") !== null)
                    next("/dashboard");
                else next();
            }
        },
        {
            path: "/signup",
            component: Signup,
            meta: {
                title: "Sign Up | Takeoff",
                header: "Takeoff",
                noAuth: true
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
            path: "/profile/:id",
            component: StudentProfile,
            props:true,
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
            path: "/dashboard",
            component: Dashboard,
            meta: {
                title: "Dashboard | Takeoff",
                header: "Dashboard"
            },
            beforeEnter: (to, from, next) => {
                if (window.localStorage.getItem("role") == 'admin')
                    next("/dashboard-admin");
                else next();
            }
        },
        {
            path: "/admin-setup",
            component: AdminSetup,
            meta: {
                title: "Admin Setup | Takeoff",
                header: "Administrator Information",
                adminOnly: true
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
            path: "/dashboard-admin",
            component: DashboardAdmin,
            meta: {
                title: "Dashboard | Takeoff",
                header: "Dashboard",
                adminOnly: true
            }
        },
        {
            path: "/workshop",
            component: Workshop,
            meta: {
                title: "Workshop | Takeoff",
                header: "Workshop"
            },
            props: true
        },
        {
            path: "/workshop-creation",
            component: WorkshopCreation,
            meta: {
                title: "Workshop | Takeoff",
                header: "Workshop"
            }
        },
        {
            path: "*",
            component: ErrorPage,
            meta: {
                title: "Whoops!",
                header: "Page Not Found"
            }
        }
    ]
});

router.beforeEach((to, from, next) => {
    if (window.localStorage.getItem("token") === null && !to.meta.noAuth) {
        next("/login");
    }
    if (window.localStorage.getItem("role") !== "admin" && to.meta.adminOnly) {
        next("/dashboard");
    }
    next();
});

export default router;
