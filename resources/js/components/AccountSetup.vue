<template>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-md-10 col-sm-12">
				<form novalidate>
					<div class="form-group mt-3">

						<div class="form-row py-4">
							<div class="col">
								<label for="password">Create a Password</label>
								<div>
									<input type="password" class="form-control" :class="passwordValidation" id="Password" placeholder="Password" v-model.trim="$v.form.password.$model">
									<div class="invalid-feedback" v-if="!$v.form.password.required">Password is required.</div>
 									<div class="invalid-feedback" v-if="!$v.form.password.minLength">Password must have at least {{ $v.form.password.$params.minLength.min }} letters.</div>
								</div>
							</div>
							<div class="col">
								<label for="confirmPassword">Confirm Password</label>
								<div>
									<input type="password" class="form-control" :class="confirmPasswordValidation" id="confirmPassword" placeholder="Confirm Password" v-model.trim="$v.form.confirmPassword.$model">
									<div class="invalid-feedback" v-if="!$v.form.confirmPassword.required">Please confirm your password.</div>
									<div class="invalid-feedback" v-if="!$v.form.confirmPassword.sameAsPassword">Passwords must be identical.</div>
								</div>
							</div>
						</div>

						<label for="firstName">First Name</label>
						<input
                            id="firstName"
							type="text"
							class="form-control"
							:class="firstNameValidation"
							placeholder="First Name"
							maxlength="50"
							v-model.trim="$v.form.firstName.$model"
						>
						<div class="invalid-feedback">Please enter your first name.</div>
					</div>
					<div class="form-group mt-4">
						<label for="lastName">Last Name</label>
						<input
                            id="lastName"
							type="text"
							:class="lastNameValidation"
							class="form-control"
							placeholder="Last Name"
							maxlength="50"
							v-model.trim="$v.form.lastName.$model"
						>
						<div class="invalid-feedback">Please enter your last name.</div>
					</div>

					<label for="college">College</label>
					<div class="input-group">
						<select
							class="form-control custom-select"
							:class="collegeValidation"
							id="college"
							aria-label="Example select with button addon"
							v-model.trim="$v.form.college.$model"
						>
							<option value selected>Choose...</option>
							<option value="1">Cal State LA</option>
							<option value="2">Cal State Santa Barbara</option>
							<option value="3">Cal State Northridge</option>
						</select>
						<div v-show="this.$v.form.college.$error" class="invalid-feedback">Please select your college.</div>
					</div>

					<label class="pt-3" for="major">Major</label>
					<div class="input-group">
						<select
							class="form-control custom-select"
							:class="majorValidation"
							id="major"
							aria-label="Example select with button addon"
							v-model.trim="$v.form.major.$model"
						>
							<option value selected>Choose...</option>
							<option value="1">Biochemistry</option>
							<option value="2">Mathematics</option>
							<option value="3">Kinesiology</option>
						</select>
						<div class="invalid-feedback">Please select your major.</div>
					</div>

					<div class="form-row">
						<div class="col pt-3">
							<label for="expectedGrad">Expected Graduation</label>
							<div class="input-group">
								<select
									class="form-control custom-select"
									:class="expectedGradValidation"
									id="expectedGrad"
									aria-label="Example select with button addon"
									v-model.trim="$v.form.expectedGrad.$model"
								>
									<option value selected>Choose...</option>
									<option value="1">2019</option>
									<option value="2">2020</option>
									<option value="3">2021</option>
								</select>
								<div class="invalid-feedback">Please enter your graduation year.</div>
							</div>
						</div>
					</div>
					<div class="text-center pt-4">
						<button
							type="submit"
							class="btn btn-primary"
							@click.prevent="submitForm"
						>Complete Registration</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</template>

<script>
import { required, minValue, maxValue, minLength, sameAs } from "vuelidate/lib/validators";
export default {
	data() {
		return {
			form: {
				password: "",
				confirmPassword: "",
				firstName: "",
				lastName: "",
				college: "",
				major: "",
				expectedGrad: ""
			}
		};
	},
	methods: {
		submitForm() {
			this.$v.$touch();
			if (!this.$v.$invalid) {
				console.log("Successful submission!");
				console.table([this.form]);
			} else console.log("Invalid Inputs! Form not submitted.");
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
		firstNameValidation() {
			if (this.$v.form.firstName.$dirty) {
				return {
					"is-invalid": this.$v.form.firstName.$error,
					"is-valid": !this.$v.form.firstName.$error
				};
			}
		},
		lastNameValidation() {
			if (this.$v.form.lastName.$dirty) {
				return {
					"is-invalid": this.$v.form.lastName.$error,
					"is-valid": !this.$v.form.lastName.$error
				};
			}
		},
		collegeValidation() {
			if (this.$v.form.college.$dirty) {
				return {
					"is-invalid": this.$v.form.college.$error,
					"is-valid": !this.$v.form.college.$error
				};
			}
		},
		majorValidation() {
			if (this.$v.form.major.$dirty) {
				return {
					"is-invalid": this.$v.form.major.$error,
					"is-valid": !this.$v.form.major.$error
				};
			}
		},
		expectedGradValidation() {
			if (this.$v.form.expectedGrad.$dirty) {
				return {
					"is-invalid": this.$v.form.expectedGrad.$error,
					"is-valid": !this.$v.form.expectedGrad.$error
				};
			}
		},
		unitsValidation() {
			if (this.$v.form.units.$dirty) {
				return {
					"is-invalid": this.$v.form.units.$error,
					"is-valid": !this.$v.form.units.$error
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
				sameAsPassword: sameAs('password')
			},
			firstName: {
				required
			},
			lastName: {
				required
			},
			college: { required },
			major: { required },
			expectedGrad: { required },
			units: {
				required,
				minValue: minValue(0),
				maxValue: maxValue(200)
			}
		}
	}
};
</script>
