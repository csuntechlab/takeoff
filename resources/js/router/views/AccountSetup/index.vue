<template>
	<div>
		<AccountSetup/>
        <router-link to="/account-setup"></router-link>
	</div>
</template>

<script>
import AccountSetup from "../../../components/AccountSetup";

export default {
	data() {
		return {};
	},

	components: {
		AccountSetup,
	}
};
</script>
