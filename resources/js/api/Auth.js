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

const logoutAPI = (payload, success, error) => {
    window.axios.get('api/auth/logout').then (
        response => {
            success(response.data)
        }
    ).catch(
        failure => {
            error(failure)
        }
    )
};

const registerAPI = (payload, success, error) => {
    window.axios.post('api/auth/register', payload).then (
        response => {
            success(response.data)
        }
    ).catch(
        failure => {
            error(failure)
        }
    )
};

const inviteStudentAPI = (payload, success, error) => {
    window.axios.post('api/auth/invite/student', payload).then (
        response => {
            success(response.data)
        }
    ).catch(
        failure => {
            error(failure)
        }
    )
};

const inviteAdminAPI = (payload, success, error) => {
    window.axios.post('api/auth/invite/admin', payload).then (
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
