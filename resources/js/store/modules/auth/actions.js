import Auth from "../../../api/Auth";
import _auth from "../../mutation-types/auth"

export default {
    login({commit, dispatch}, payload) {
        Auth.loginAPI(payload,
            success => {
                commit(_auth.UPDATE_SESSION, success)
            },
            error => {
                console.log(error)
            }
         );
    }
}
