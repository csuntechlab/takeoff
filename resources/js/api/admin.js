const inviteUserAPI = (payload, success, error) => {
    window.axios
        .post("api/auth/invite/student", {
            headers: {
                Authorization: 'Bearer ' + window.localStorage.getItem('token')
            }
        }, payload)
        .then(response => {
            success(response.data);
        })
        .catch(failure => {
            error(failure);
        });
};

const inviteAdminAPI = (payload, success, error) => {
    window.axios
        .post("api/auth/invite/admin", {
            headers: {
                Authorization: 'Bearer ' + window.localStorage.getItem('token')
            }
        }, payload)
        .then(response => {
            success(response.data);
        })
        .catch(failure => {
            error(failure);
        });
};

const fetchUsersAPI = (success, error) => {
    window.axios.get('api/students/all', {
        headers: {
            Authorization: 'Bearer ' + window.localStorage.getItem('token')}
    }).then(
        response => success(response.data)
    ).catch(
        failure => { error(failure.response.data.message) }
    )
};

export default {
    fetchUsersAPI,
    inviteUserAPI,
    inviteAdminAPI
}
