<template>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-md-10 col-sm-12">
				<form novalidate>
					<div class="form-group mt-5">
						<label for="adminFirstName">First Name</label>
						<input
                            id="adminFirstName"
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
						<label for="adminLastName">Last Name</label>
						<input
                            id="adminLastName"
							type="text"
							:class="lastNameValidation"
							class="form-control"
							placeholder="Last Name"
							maxlength="50"
							v-model.trim="$v.form.lastName.$model"
						>
						<div class="invalid-feedback">Please enter your last name.</div>
					</div>
                    <div class="form-group mt-4">
						<label for="adminTitle">Title</label>
						<input
                            id="adminTitle"
							type="text"
							:class="titleValidation"
							class="form-control"
							placeholder="Last Name"
							maxlength="50"
							v-model.trim="$v.form.title.$model"
						>
						<div class="invalid-feedback">Please enter your title.</div>
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
import { required } from "vuelidate/lib/validators";
export default {
	data() {
		return {
			form: {
				firstName: null,
				lastName: null,
				title: null
			}
		};
    },
    computed: {
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
		titleValidation() {
			if (this.$v.form.title.$dirty) {
				return {
					"is-invalid": this.$v.form.title.$error,
					"is-valid": !this.$v.form.title.$error
				};
			}
		},
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
    validations: {
		form: {
			firstName: {
				required
			},
			lastName: {
				required
			},
			title: { required },
		}
	}
};
</script>
