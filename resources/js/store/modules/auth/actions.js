import Auth from "../../../api/Auth";
import router from "../../../router"
import Profile from "../../../api/Profile";

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

    logout ({commit, dispatch}) {
        Auth.logoutAPI(
            success => {
                commit('CLEAR_SESSION')
                router.push('/login')
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
                console.log(success)
                commit('UPDATE_SESSION', success.registration_access_token)
                router.push("/account-setup")
            },
            error => {
                console.error(payload)
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
                console.error(error)
            }
         );
    },

    setUserInfo ({commit, dispatch}, payload){
        commit('SET_USER_INFO', payload)
    },

    fetchUserInfo ({commit, dispatch}, payload){
        //Fetch user info by id and store in state
        return 0
    },

    createProfileData({commit, dispatch}, payload){
        payload['userId'] = window.localStorage.getItem('userId')
        Profile.sendProfileData(payload,
            success => {
                console.log('TODO: Success notification for data saved')
                router.push('/dashboard')
            },
            error => {
                console.log({payload})
                console.error(error)
            })
    }

}
