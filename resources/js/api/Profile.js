
const sendProfileData = (payload, success, error) => {
    window.axios.post('profile/store', payload).then (
        response => success(response.data)
    ).catch(
        failure=>{ error(failure.response.data.message)}
    )
};

export default {
    sendProfileData
}