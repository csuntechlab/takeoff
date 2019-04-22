// import axios from 'axios';

// export default {
//     sendProfileData(payload){
//        return axios.post('/profile/', payload)
//     }
// }

const sendProfileData = (payload, success, error) => {
    window.axios.post('ProfileController@createStudentUserInfo', payload).then (
        response => success(response.data)
    ).catch(
        failure=>{ error(failure.response.data.message)}
    )
};

export default {
    sendProfileData
}