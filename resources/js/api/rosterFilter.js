const filterByMajorAPI = (payload, success, error) => {
    window.axios.get('major/{major}', payload).then (
        response => success(response.data)
    ).catch(
        failure=>{ error(failure.response.data.message)} //nested inside the predecessor
    )
};

const filterByGraddateAPI = (payload, success, error) => {
    window.axios.get('graddate/{graddate}', payload).then (
        response => success(response.data)
    ).catch(
        failure=>{ error(failure.response.data.message)} //nested inside the predecessor
    )
};

const filterByCollegeAPI = (payload, success, error) => {
    window.axios.get('college/{college}', payload).then (
        response => success(response.data)
    ).catch(
        failure=>{ error(failure.response.data.message)} //nested inside the predecessor
    )
};

export default {
    filterByMajorAPI,
    filterByGraddateAPI,
    filterByCollegeAPI
}