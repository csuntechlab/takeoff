<template>
	<div>
		<LogIn></LogIn>
        <router-link to="/login"></router-link>
	</div>
</template>

<script>
import LogIn from "../../../components/authentication/LogIn";

export default {
	data() {
		return {};
	},

	components: {
		LogIn,
	}
};
</script>
