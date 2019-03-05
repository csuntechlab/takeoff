<template>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card card-default">
					<div class="card-header">Example Component</div>
					<div class="card-body">
						I'm an example component.
						<i class="fab fa-accessible-icon"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import BButton from "bootstrap-vue/es/components/button/button";
import BAlert from "bootstrap-vue/es/components/alert/alert";
export default {
	components: {
		"b-button": BButton,
		"b-alert": BAlert
	},

	mounted() {
		window.axios
			.get('https://jsonplaceholder.typicode.com/todos/1')
			.then(function(response) {
				console.log(response);
			})
			.catch(function(error) {
				console.log(error);
			});
	}
};
</script>
