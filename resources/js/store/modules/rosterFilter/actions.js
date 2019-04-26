import RosterFilter from "./../../../api/rosterFilter"


export default {
    filterByMajor({commit}, payload) {
        RosterFilter.filterByMajorAPI (
            payload, 
            success => {
                
            },
            error => {

            }
        )
    }
}