const sendProfileData = (payload, success, error) => {
    window.axios
        .post("api/profile/store", payload)
        .then(response => success(response.data))
        .catch(failure => {
            error(failure.response.data.message);
        });
};

const sendAdminData = (payload, success, error) => {
    window.axios
        .post("api/admin/store",payload)
        .then(response => success(response.data))
        .catch(failure => {
            error(failure.response.data.message);
        });
};

export default {
    sendProfileData,
    sendAdminData
};
