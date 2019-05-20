export default {
    UPDATE_SESSION(state, payload) {
        window.localStorage.setItem("userId", payload.user_id);
        window.localStorage.setItem("tokenType", payload.token_type);
        window.localStorage.setItem("token", payload.access_token);
        window.localStorage.setItem("expiration", payload.expires_at);
        window.localStorage.setItem("role", payload.role);
    },

    CLEAR_SESSION(state) {
        window.localStorage.clear()
    },

    SET_USER_INFO(state, payload) {
        state.user = {
            ...state.user,
            ...payload
        }
    }
}
