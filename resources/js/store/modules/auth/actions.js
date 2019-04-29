import Auth from "../../../api/Auth";
import _auth from "../../mutation-types/auth"

export default {
    login ({commit, dispatch}, payload) {
        Auth.loginAPI(payload,
            success => {
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
        Auth.registerAPI(payload,
            success => {
                console.log("TODO: give success notification")
                this.$router.push("account-setup")
            },
            error => {
                console.log(error)
            }
         );
    },

    inviteStudent ({commit, dispatch}, payload) {
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
