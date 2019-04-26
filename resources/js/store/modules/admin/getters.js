export default {
    getSetOfUsers: (state) => (set, span) => {
        let start = set * span
        let end = (set+1) * span
        return state.users.slice(start, end)
    },
    getLengthOfUsers: (state) => {
        return state.users.length
    }
}
