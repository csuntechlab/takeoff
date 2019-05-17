import Vue from "vue"
import VueRouter from "vue-router"

//Pages
import Login from "./views/Login"
import Signup from "./views/SignUp"
import AccountSetup from "./views/AccountSetup"
import ProfileSetup from "./views/ProfileSetup"
import AdminSetup from "./views/AdminSetup"
import StudentProfile from "./views/StudentProfile"
import EditProfile from "./views/EditProfile"
import Dashboard from "./views/Dashboard"
import Roster from "./views/Roster"
import DashboardAdmin from "./views/DashboardAdmin"
import ErrorPage from "./views/ErrorPage"
import WorkshopView from "./views/WorkshopView"
import WorkshopCreation from "./views/WorkshopCreation"


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
            path: "/profile",
            component: StudentProfile,
            meta: {
                title: "Profile | Takeoff",
                header: "Edgar's Profile"
            }
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
            path: "/workshopview",
            component: WorkshopView,
            meta: {
                title: "Workshop View| Takeoff",
                header: "Workshop View"
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
                title: 'Whoops!',
                header: 'Page Not Found'
            }
        }
    ]
});

export default router;
