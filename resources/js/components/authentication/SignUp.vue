<template>
	<div class="row justify-content-center">
		<form @submit.prevent="signup">
			<h2 class="text-center text-primary mt-4 pt-2">Sign Up</h2>
			<div class="form-group form__email mt-5">
				<label for="emailInput">Email:</label>
				<div>
					<input
						type="email"
						class="form-control"
						:class="emailValidation"
						id="emailInput"
						aria-describedby="emailHelp"
						placeholder="Email"
						v-model.trim="$v.form.email.$model"
					>
					<div
						class="invalid-feedback"
						v-if="!$v.form.confirmPassword.required"
					>Please enter the email where your invitation was received.</div>
				</div>
			</div>
			<div class="form-group mt-4">
				<label for="accessCodeInput">Access Code:</label>
				<div>
					<input
						type="text"
						class="form-control"
						:class="accessCodeValidation"
						id="accessCodeInput"
						placeholder="Access Code"
						v-model.trim="$v.form.accessCode.$model"
					>
					<div class="invalid-feedback" v-if="!$v.form.accessCode.required">Access code is required.</div>
				</div>
			</div>
			<div class="form-group mt-4">
				<div class="form-row py-4">
					<div class="col">
						<label for="passwordInput">Create a Password</label>
						<div>
							<input
								type="password"
								class="form-control"
								:class="passwordValidation"
								id="passwordInput"
								placeholder="Password"
								v-model.trim="$v.form.password.$model"
							>
							<div class="invalid-feedback" v-if="!$v.form.password.required">Password is required.</div>
							<div
								class="invalid-feedback"
								v-if="!$v.form.password.minLength"
							>Password must have at least {{ $v.form.password.$params.minLength.min }} letters.</div>
						</div>
					</div>
					<div class="col">
						<label for="confirmPasswordInput">Confirm Password</label>
						<div>
							<input
								type="password"
								class="form-control"
								:class="confirmPasswordValidation"
								id="confirmPasswordInput"
								placeholder="Confirm Password"
								v-model.trim="$v.form.confirmPassword.$model"
							>
							<div
								class="invalid-feedback"
								v-if="!$v.form.confirmPassword.required"
							>Please confirm your password.</div>
							<div
								class="invalid-feedback"
								v-if="!$v.form.confirmPassword.sameAsPassword"
							>Passwords must be identical.</div>
						</div>
					</div>
				</div>
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
import {
	required,
	minValue,
	maxValue,
	minLength,
	sameAs
} from "vuelidate/lib/validators";
export default {
	name: "SignUp",
	data() {
		return {
			form: {
				email: null,
				accessCode: null,
				password: null,
				confirmPassword: null
			}
		};
	},
	methods: {
		goToLogin() {
			this.$router.push("login");
		},
		signup() {
			this.$v.$touch();
			if (!this.$v.$invalid) {
				this.$store.dispatch("register", this.form);
			} else console.log("Invalid Inputs!");
		}
	},
	computed: {
		passwordValidation() {
			if (this.$v.form.password.$dirty) {
				return {
					"is-invalid": this.$v.form.password.$error,
					"is-valid": !this.$v.form.password.$error
				};
			}
		},
		confirmPasswordValidation() {
			if (this.$v.form.confirmPassword.$dirty) {
				return {
					"is-invalid": this.$v.form.confirmPassword.$error,
					"is-valid": !this.$v.form.confirmPassword.$error
				};
			}
		},
		emailValidation() {
			if (this.$v.form.email.$dirty) {
				return {
					"is-invalid": this.$v.form.email.$error,
					"is-valid": !this.$v.form.email.$error
				};
			}
		},
		accessCodeValidation() {
			if (this.$v.form.accessCode.$dirty) {
				return {
					"is-invalid": this.$v.form.accessCode.$error,
					"is-valid": !this.$v.form.accessCode.$error
				};
			}
		}
	},
	validations: {
		form: {
			password: {
				required,
				minLength: minLength(6)
			},
			confirmPassword: {
				required,
				sameAsPassword: sameAs("password")
			},
			accessCode: {
				required
			},
			email: {
				required
			}
		}
	}
};
</script>
