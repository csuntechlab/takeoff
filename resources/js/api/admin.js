const fetchUsersAPI = (success, error) => {
    window.axios.get('api/students/all').then(
        response => success(response.data)
    ).catch(
        failure => { error(failure.response.data.message) }
    )
};

export default {
    fetchUsersAPI
}
