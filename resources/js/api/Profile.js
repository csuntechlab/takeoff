const sendProfileDataAPI = (payload, success, error) => {
    window.axios
        .post("api/profile/store", payload)
        .then(response => success(response.data))
        .catch(failure => {
            error(failure.response.data.message);
        });
};

const sendAdminDataAPI = (payload, success, error) => {
    window.axios
        .post("api/admin/store", payload)
        .then(response => success(response.data))
        .catch(failure => {
            error(failure.response.data.message);
        });
};

const fetchUserInfoAPI = (payload, success, error) => {
    window.axios
        .get("api/students/id", payload, {
            headers: {
                Authorization: "Bearer " + window.localStorage.getItem("token")
            }
        })
        .then(response => success(response.data))
        .catch(failure => {
            error(failure.response.data.message);
        });
};

export default {
    sendProfileDataAPI,
    sendAdminDataAPI,
    fetchUserInfoAPI
};
