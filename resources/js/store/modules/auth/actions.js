import Auth from "../../../api/Auth";
import router from "../../../router"

export default {
    login ({commit, dispatch}, payload) {
        Auth.loginAPI(
            payload,
            success => {
                commit('UPDATE_SESSION', success)
                router.push('/')
            },
            error => {
                console.log(payload)
                console.error(error)
            }
         );
    },

    logout ({commit, dispatch}, payload) {
        Auth.logoutAPI(
            payload,
            success => {
                commit('CLEAR_SESSION')
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
