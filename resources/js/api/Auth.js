// AUTH API
//

import axios from 'axios';

axios.get('/oauth/clients')
    .then(response => {
        console.log(response.data);
    });

const loginAPI = (payload, success, error) => {
    window.axios.post('api/auth/login', payload).then (
        response => {
            success(response.data)
        }
    ).catch(
        failure => {
            error(failure)
        }
    )
};

export default {
    loginAPI
}
