<template>
	<div>
        <LoginNavBar v-if="loggingIn"/>
        <NavBar v-else/>
		<router-view></router-view>
	</div>
</template>
<script>
import LoginNavBar from "./components/authentication/LoginNavBar"
import NavBar from "./components/global/NavBar"
export default {
    components: {
        LoginNavBar,
        NavBar
    },
    computed: {
        loggingIn() {
            return (this.$route.path == "/signup" || this.$route.path == "/login")
        }
    }
}
</script>

