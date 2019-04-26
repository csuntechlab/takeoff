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
    }
}
