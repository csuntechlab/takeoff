import Auth from "../../../api/Auth";
import _auth from "../../mutation-types/auth"
import router from "../../../router"

export default {
    login ({commit, dispatch}, payload) {
        let self = this
        Auth.loginAPI(payload,
            success => {
                router.push('/')
                commit(_auth.UPDATE_SESSION, success)
            },
            error => {
                console.log(payload)
                console.error(error)
            }
         );
    },

    logout ({commit, dispatch}, payload) {
        Auth.logoutAPI(payload,
            success => {
                commit(_auth.CLEAR_SESSION, success)
            },
            error => {
                console.error(error)
            }
         );
    },

    register ({commit}, payload) {
        payload['userId'] = window.localStorage.getItem('userId')
        Auth.registerAPI(payload,
            success => {
                console.log("TODO: give success notification")
                router.push("account-setup")
            },
            error => {
                console.log(payload)
                console.log(error)
            }
         );
    },

    inviteStudent ({commit, dispatch}, payload) {
        payload['userId'] = window.localStorage.getItem('userId')
        Auth.inviteStudentAPI(payload,
            success => {
                console.log("TODO: give success notification")
            },
            error => {
                console.log(error)
            }
         );
    },

    inviteAdmin ({commit, dispatch}, payload) {
        payload['userId'] = window.localStorage.getItem('userId')
        Auth.inviteAdminAPI(payload,
            success => {
                console.log("TODO: give success notification")
            },
            error => {
                console.log(error)
            }
         );
    },

}
