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
import ErrorPage from "./views/ErrorPage"
import Roster from "./views/Roster"
import DashboardAdmin from "./views/DashboardAdmin"

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
            path: "*",
            component: ErrorPage,
            meta: {
                title: 'Whoops!',
                header: 'Page Not Found'
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
        }

    ]
});

export default router;
