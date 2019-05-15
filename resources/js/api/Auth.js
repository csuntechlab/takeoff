// AUTH API
const loginAPI = (payload, success, error) => {
    window.axios
        .post("api/auth/login", payload)
        .then(response => {
            success(response.data);
        })
        .catch(failure => {
            error(failure);
        });
};

const logoutAPI = (success, error) => {
    window.axios
        .get("api/auth/logout", window.localStorage.getItem('userId'))
        .then(response => {
            success(response.data);
        })
        .catch(failure => {
            error(failure);
        });
};

const registerAPI = (payload, success, error) => {
    window.axios
        .post("api/auth/register", payload)
        .then(response => {
            success(response.data);
        })
        .catch(failure => {
            console.log('oops')
            error(failure);
        });
};

export default {
    loginAPI,
    logoutAPI,
    registerAPI
};
