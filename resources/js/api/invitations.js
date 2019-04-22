const inviteUserAPI = (payload, success, error) => {
    window.axios.post('api/auth/invite/student', payload).then (
        response => success(response.data)
    ).catch(
        failure=>{ error(failure.response.data.message)} //nested inside the predecessor
    )
};

export default {
    inviteUserAPI
}