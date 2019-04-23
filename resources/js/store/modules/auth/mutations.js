import _auth from "../../mutation-types/auth";

export default {
    [_auth.UPDATE_SESSION](state, payload) {
        state.session.userId = payload.user_id;
        state.session.tokenType = payload.token_type;
        state.session.token = payload.access_token;
        state.session.expiration = payload.expires_at;
    }
}
