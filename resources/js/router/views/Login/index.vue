<template>
	<div>
		<LogIn></LogIn>
        <router-link to="/login"></router-link>
	</div>
</template>

<script>
import LogIn from "../../../components/LogIn";

export default {
	data() {
		return {};
	},

	components: {
		LogIn,
	}
};
</script>
