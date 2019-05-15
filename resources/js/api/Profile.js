const sendProfileData = (payload, success, error) => {
    window.axios
        .post(
            "api/profile/store",
            {
                headers: {
                    Authorization:
                        "Bearer " + window.localStorage.getItem("token")
                }
            },
            payload
        )
        .then(response => success(response.data))
        .catch(failure => {
            error(failure.response.data.message);
        });
};

export default {
    sendProfileData
};
