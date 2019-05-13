const fetchUsersAPI = (success, error) => {
    window.axios.get('api/students/all', {
        headers: {
            Authorization: 'Bearer ' + window.localStorage.getItem('token')
    }}).then(
        response => success(response.data)
    ).catch(
        failure => { error(failure.response.data.message) }
    )
};

export default {
    fetchUsersAPI
}
