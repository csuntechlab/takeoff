import Admin from "../../../api/admin";

export default {
    fetchAllUsers({commit}){
        Admin.fetchUsersAPI(
            success => {
                commit('STORE_USERS', success)
            },
            error => {
                console.log("Error: ", error)
            }
        )
    },

    inviteStudent ({commit, dispatch}, payload) {
        payload['userId'] = window.localStorage.getItem('userId')
        Admin.inviteStudentAPI(payload,
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
        Admin.inviteAdminAPI(payload,
            success => {
                console.log("TODO: give success notification")
            },
            error => {
                console.error(error)
            }
         );
    },
}
