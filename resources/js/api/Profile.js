import axios from 'axios';

export default {
    sendProfileData(payload){
    return axios.post('/profile/', payload)
    }
}




