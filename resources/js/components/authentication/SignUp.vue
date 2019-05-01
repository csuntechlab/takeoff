<template>
	<div class="row justify-content-center">
		<form @submit.prevent="signup">
			<h2 class="text-center text-primary mt-4 pt-2">Sign Up</h2>
			<div class="form-group form__email mt-5">
				<label for="exampleInputEmail1">Email:</label>
				<input
					type="email"
					class="form-control"
					id="exampleInputEmail1"
					aria-describedby="emailHelp"
					placeholder="Email"
					v-model="form.email"
				>
			</div>
			<div class="form-group mt-4">
				<label for="exampleInputAccessCode">Access Code:</label>
				<input
					type="text"
					class="form-control"
					id="exampleInputAccessCode"
					placeholder="Access Code"
					v-model="form.accessCode"
				>
			</div>
			<div class="signup__button text-center pt-4">
				<button type="submit" class="btn btn-primary">Register</button>
			</div>
			<div class="signup__button text-center pt-3">
				<button
					type="button"
					class="btn btn-outline-primary"
					@click="goToLogin"
				>Already have an account?</button>
			</div>
		</form>
	</div>
</template>

<script>
export default {
	name: "SignUp",
	data() {
		return {
			form: {
				email: null,
				accessCode: null
			}
		};
	},
	methods: {
		goToLogin() {
			this.$router.push("login");
		},
		signup() {
            this.$store.dispatch("register", this.form)
		}
	}
};
</script>
