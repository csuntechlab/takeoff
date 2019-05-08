import profileAPI from './../../../api/Profile'

export default {
    async sendProfileData ({commit}, payload){
        return profileAPI.sendProfileData(payload)
        .then(
            response => {
                console.log(response);
                commit('post_profile_data', payload) //saving data into the state after api is succesful
            }
        )
    }
}