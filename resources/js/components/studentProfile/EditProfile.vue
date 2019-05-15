<template>
	<form>
		<div>
			<img class="profile-thumbnail mb-4 mt-2 mx-auto d-block" :src="user.image" alt>
		</div>
		<div class="custom-file">
			<input type="file" class="custom-file-input" id="validatedCustomFile" accept=".jpg, .jpeg, .png">
			<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
			<small class="form-text text-muted">Accepts .jpg, .jpeg, and .png file types.</small>
		</div>
		<div class="form-row mt-5">
			<label for="exampleInputFirstName">Biography</label>
			<textarea
				class="form-control"
				rows="5"
				placeholder="Write about yourself."
				v-model="form.biography"
			></textarea>
		</div>
		<div class="form-row mt-4">
			<label for="exampleInputLastName">Research</label>
			<textarea
				class="form-control"
				rows="5"
				placeholder="Write about any research projects."
				v-model="form.research"
			></textarea>
		</div>

		<div class="form-row mt-4">
			<label for="exampleInputLastName">Fun Fact About Me</label>
			<textarea
				class="form-control"
				rows="5"
				placeholder="Write a fun fact about yourself."
				v-model="form.funFacts"
			></textarea>
		</div>

		<div class="mt-4">
			<label for="academicInterests">Academic Interests</label>
			<input id="academicInterests" type="text" placeholder="Write about your interests.">
		</div>

		<div class="text-center pt-4 pb-4">
			<button
				type="submit"
				class="btn btn-primary"
				@click.prevent="submitChanges"
			>Save Changes</button>
			<!-- <router-link to="/profile" type="submit" class="btn btn-primary" @click="sendData" @click.prevent="submitChanges">Save Changes</router-link> -->
		</div>
	</form>
</template>
<script>
import Profile from "./../../api/Profile";
import Choices from "choices.js";
var interests;
import { mapState } from "vuex";
export default {
	props: {
		setupMode: {
			default: false
		}
	},
	data() {
		return {
			form: {
				image: "",
				biography: "",
				research: "",
				funFacts: "",
				academicInterests: ""
			}
		};
	},
	mounted() {
		if (this.setupMode) {
			interests = new Choices(
				document.querySelector("#academicInterests"),
				{
					delimiter: ",",
					removeItemButton: true,
					duplicateItemsAllowed: false,
					editItems: true
				}
			);
		} else {
			interests = new Choices(
				document.querySelector("#academicInterests"),
				{
					delimiter: ",",
					items: this.user.interests,
					removeItemButton: true,
					duplicateItemsAllowed: false,
					editItems: true
				}
			);
		}
	},
	computed: {
		...mapState({
			user: state => state.Auth.user
		})
	},
	methods: {
		submitChanges() {
			if (interests)
				this.form.academicInterests = interests.getValue(true);
			if (this.setupMode) {
				this.$store.dispatch("setUserInfo", this.form);
				this.$store.dispatch("createProfileData", this.user);
			} else {
				this.$store.dispatch("setUserInfo", this.form);
				//edit profile info api goes here
			}
		},
	}
};
</script>
