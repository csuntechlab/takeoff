<template>
	<div>
		<ProfileSetup/>
        <router-link to="/finishsetup"></router-link>
	</div>
</template>

<script>
import ProfileSetup from "../../../components/ProfileSetup";

export default {
	data() {
		return {};
	},

	components: {
		ProfileSetup,
	}
};
</script>
