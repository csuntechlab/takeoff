<template>
	<div>
		<Example-Component></Example-Component>
		<router-link to="/">Login</router-link>
	</div>
</template>

<script>
import ExampleComponent from "../../../components/ExampleComponent";
export default {
	data() {
		return {};
	},

	components: {
		ExampleComponent
	}
};
</script>
