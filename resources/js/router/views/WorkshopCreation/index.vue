<template>
    <div class="container pt-4 text-primary">
        <label>Workshop Title</label>
        <div class="input-group mb-3">
            <input 
                type="text" 
                class="form-control" 
                :class="workshopTitleValidation"
                placeholder="Workshop #9" 
                maxlength="50"
                v-model.trim="$v.form.workshopTitle.$model"
            >
            <div class="invalid-feedback">Please enter the workshop title.</div>
        </div>

        <div class="form-row mb-3">
            <div class="col pt 3">
                <label for="date">Date</label>
                <input 
                    type="date" 
                    class="form-control"
                    :class="dateValidation"
                    placeholder="Date"
                    maxlength="50"
                    v-model.trim="$v.form.date.$model"
                >
                <div class="invalid-feedback">Please enter a date.</div>
            </div>
            <div class="col pt 3">
                <label for="time">Time</label>
                <input 
                    type="time" 
                    class="form-control"
                    :class="timeValidation"
                    placeholder="Time"
                    maxlength="50"
                    v-model.trim="$v.form.time.$model"
                >
                <div class="invalid-feedback">Please enter a time.</div>
            </div>
        </div>
        <label>Location</label>
        <div class="input-group mb-3">
            <input 
                type="text" 
                class="form-control" 
                :class="locationValidation"
                placeholder="Location" 
                maxlength="50"
                v-model.trim="$v.form.location.$model"
            >
            <div class="invalid-feedback">Please enter a location.</div>
        </div>
        <label>Description</label>
        <div class="input-group mb-3">
            <textarea 
                class="form-control" 
                :class="descriptionValidation"
                placeholder="Lorem ipsum lives in a tiny cottage in west new zealand, eats cheerios with milk and sleeps 18 hrs a day" 
                minlength="20"
                maxlength="200"
                rows="5"
                v-model.trim="$v.form.description.$model"
            ></textarea>
            <div class="invalid-feedback">Please enter a description.</div>
        </div>
        <div class="text-center pt-4">
            <button
                type="submit"
                class="btn btn-primary"
                @click.prevent="submitForm"
            >Create Workshop</button>
        </div>

    </div>
</template>

<script>
import { required, minLength, maxLength, sameAs } from "vuelidate/lib/validators";
export default {
	data() {
		return {
			form: {
				workshopTitle: "",
                date:"",
                time:"",
                location:"",
                description:""
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
		workshopTitleValidation() {
			if (this.$v.form.workshopTitle.$dirty) {
				return {
					"is-invalid": this.$v.form.workshopTitle.$error,
					"is-valid": !this.$v.form.workshopTitle.$error
				};
			}
		},
		dateValidation() {
			if (this.$v.form.date.$dirty) {
				return {
					"is-invalid": this.$v.form.date.$error,
					"is-valid": !this.$v.form.date.$error
				};
			}
		},
		timeValidation() {
			if (this.$v.form.time.$dirty) {
				return {
					"is-invalid": this.$v.form.time.$error,
					"is-valid": !this.$v.form.time.$error
				};
			}
        },
        locationValidation() {
			if (this.$v.form.location.$dirty) {
				return {
					"is-invalid": this.$v.form.location.$error,
					"is-valid": !this.$v.form.location.$error
				};
			}
        },
        descriptionValidation() {
			if (this.$v.form.description.$dirty) {
				return {
					"is-invalid": this.$v.form.description.$error,
					"is-valid": !this.$v.form.description.$error
				};
			}
		}
	},
	validations: {
		form: {
			workshopTitle: {
				required
			},
			date: {
				required
            },
            time: {
				required
            },
            location: {
				required
            },
            description: {
				required,
				minLength: minLength(20),
				maxLength: maxLength(200)
			}
		}
	}
};
</script>