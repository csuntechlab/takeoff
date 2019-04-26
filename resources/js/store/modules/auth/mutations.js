import _auth from "../../mutation-types/auth";

export default {
    [_auth.UPDATE_SESSION](state, payload) {
        state.session.userId = payload.user_id;
        state.session.tokenType = payload.token_type;
        state.session.token = payload.access_token;
        state.session.expiration = payload.expires_at;
        window.localStorage.setItem("userId", payload.user_id);
        window.localStorage.setItem("tokenType", payload.token_type);
        window.localStorage.setItem("token", payload.access_token);
        window.localStorage.setItem("expiration", payload.expires_at);
        window.localStorage.setItem("role", payload.role);
    },

    [_auth.CLEAR_SESSION](state, payload) {
        window.localStorage.setItem("userId", null);
        window.localStorage.setItem("tokenType", null);
        window.localStorage.setItem("token", null);
        window.localStorage.setItem("expiration", null);
        window.localStorage.setItem("role", null);

    }
}
