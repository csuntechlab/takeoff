import _auth from "../../mutation-types/auth";

export default {
    [_auth.UPDATE_SESSION](state, payload) {
        for (var k in payload) state.session[k] = payload[k];
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
