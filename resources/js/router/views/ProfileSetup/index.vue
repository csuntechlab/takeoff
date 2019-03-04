<template>
	<div>
		<ProfileSetup></ProfileSetup>
        <router-link to="/profilesetup"></router-link>
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
