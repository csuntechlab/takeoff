<template>
	<div>
		<LoginNavBar v-if="loggingIn"/>
		<NavBar v-else/>
		<router-view></router-view>
	</div>
</template>
<script>
import LoginNavBar from "./components/authentication/LoginNavBar";
import NavBar from "./components/global/NavBar";
export default {
	components: {
		LoginNavBar,
		NavBar
    },
    mounted() {
        if(window.localStorage.getItem('token') !== null){
            if(window.localStorage.getItem('role') == 'admin')
                this.$store.dispatch('fetchAdminInfo', window.localStorage.getItem('userId'))
            else
                this.$store.dispatch('fetchUserInfo', window.localStorage.getItem('userId'))
        }
    },
	computed: {
		loggingIn() {
			return (
				this.$route.path == "/signup" ||
				this.$route.path == "/login" ||
				this.$route.path == "/profile-setup" ||
				this.$route.path == "/account-setup" ||
				this.$route.path == "/admin-setup"
			);
		}
	}
};
</script>
