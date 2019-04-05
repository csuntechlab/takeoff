<template>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-md-8 col-sm-12">
				<form>
					<div>
						<img class="profile-thumbnail mb-4 mt-2 mx-auto d-block" :src="form.image" alt>
					</div>
					<div class="custom-file">
						<input
							type="file"
							class="custom-file-input"
							id="validatedCustomFile"
							accept=".jpg, .jpeg, .png"
						>
						<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
						<small class="form-text text-muted">Accepts .jpg, .jpeg, and .png file types.</small>
					</div>
					<div class="form-row mt-5">
						<label for="exampleInputFirstName">Biography</label>
						<textarea class="form-control" rows="5" placeholder="Write about yourself." v-model="form.biography"></textarea>
					</div>
					<div class="form-row mt-4">
						<label for="exampleInputLastName">Research</label>
						<textarea class="form-control" rows="5" placeholder="Write about any research projects." v-model="form.research"></textarea>
					</div>

					<div class="form-row mt-4">
						<label for="exampleInputLastName">Fun Fact About Me</label>
						<textarea class="form-control" rows="5" placeholder="Write a fun fact about yourself." v-model="form.funFacts"></textarea>
					</div>

					<div class="form-row mt-4">
						<label for="exampleInputLastName">Academic Interest</label>
						<textarea class="form-control" rows="5" placeholder></textarea>
					</div>

					<div class="text-center pt-4 pb-4">
						<button type="submit" class="btn btn-primary" @click.prevent="submitChanges">Save Changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</template>
<script>
import { mapState, mapGetters } from "vuex";
export default {
    data() {
        return {
            form: {
                image: null,
                biography: null,
                research: null,
                funFacts: null,
                academicInterests: null
            }
        }
    },
	computed: {
		...mapGetters([
			'student'
        ])
        // student() {
        //     return this.$store.getters.student
        // }
    },
    methods: {
        submitChanges() {
            console.table({ form: this.form })
        }
    }
};
</script>
