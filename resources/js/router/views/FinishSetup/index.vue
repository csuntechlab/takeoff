<template>
	<div>
		<FinishSetup></FinishSetup>
        <router-link to="/finishsetup"></router-link>
	</div>
</template>

<script>
import FinishSetup from "../../../components/FinishSetup";

export default {
	data() {
		return {};
	},

	components: {
		FinishSetup,
	}
};
</script>
