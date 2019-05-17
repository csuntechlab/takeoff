import Auth from "../../../api/Auth";
import router from "../../../router";
import Profile from "../../../api/Profile";

export default {
    login({ commit, dispatch }, payload) {
        Auth.loginAPI(
            payload,
            success => {
                commit("UPDATE_SESSION", success);
                dispatch("fetchUserInfo", success.user_id);
                router.push("/");
            },
            error => {
                console.log(payload);
                console.error(error);
            }
        );
    },

    logout({ commit, dispatch }) {
        Auth.logoutAPI(
            success => {
                commit("CLEAR_SESSION");
                router.push("/login");
            },
            error => {
                console.error(error);
            }
        );
    },

    register({ commit, dispatch }, payload) {
        Auth.registerAPI(
            payload,
            success => {
                console.log("TODO: give success notification");
                Auth.loginAPI(
                    { email: payload.email, password: payload.password },
                    success => {
                        commit("UPDATE_SESSION", success);
                        if (success.role !== "admin")
                            router.push("/account-setup");
                        else router.push("/admin-setup");
                    },
                    error => {
                        console.log(payload);
                        console.error(error);
                    }
                );
            },
            error => {
                console.error(payload);
            }
        );
    },

    setUserInfo({ commit, dispatch }, payload) {
        commit("SET_USER_INFO", payload);
    },

    fetchUserInfo({ commit, dispatch }, payload) {
        Profile.fetchUserInfoAPI(
            payload,
            success => {
                console.log(success);
                commit("SET_USER_INFO", success[0]);
            },
            error => {
                console.error(error);
            }
        );
    },

    createProfileData({ commit, dispatch }, payload) {
        payload["userId"] = window.localStorage.getItem("userId");
        Profile.sendProfileDataAPI(
            payload,
            success => {
                console.log("TODO: Success notification for data saved");
                router.push("/dashboard");
            },
            error => {
                console.log({ payload });
                console.error(error);
            }
        );
    },

    createAdminData({ commit, dispatch }, payload) {
        payload["userId"] = window.localStorage.getItem("userId");
        Profile.sendAdminDataAPI(
            payload,
            success => {
                console.log("TODO: Success notification for data saved");
                router.push("/dashboard-admin");
            },
            error => {
                console.log({ payload });
                console.error(error);
            }
        );
    }
};
