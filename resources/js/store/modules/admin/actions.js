import Admin from "../../../api/admin";
import RosterFilter from "./../../../api/rosterFilter"

export default {
    fetchAllUsers({commit}){
        // console.log("maybe")
        Admin.fetchUsersAPI(
            success => {
                commit('STORE_USERS', success)
                console.log("yes")
            },
            error => {
                console.log("Error: ", error)
            }
        )
    },
    filterByMajor({commit}, payload) {
        RosterFilter.filterByMajorAPI(
            payload, 
            success => {
                commit('STORE_USERS', success)
            },
            error => {
                console.log("Error: ", error)
            }
        )
    },
    filterByCollege({commit}, payload) {
        RosterFilter.filterByCollegeAPI(
            payload, 
            success => {
                commit('STORE_USERS', success)
            },
            error => {
                console.log("Error: ", error)
            }
        )
    },
    filterByGradDate({commit}, payload) {
        RosterFilter.filterByGradDateAPI(
            payload, 
            success => {
                commit('STORE_USERS', success)
            },
            error => {
                console.log("Error: ", error)
            }
        )
    }
}



