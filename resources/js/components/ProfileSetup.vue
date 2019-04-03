<template>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-md-8 col-sm-12">
				<form>
					<router-link to="/">
						<p class="text-center pt-3">Skip for now
							<span aria-hidden="true">&raquo;</span>
						</p>
					</router-link>
					<div>
						<img
							class="profile-thumbnail mb-4 mt-2 mx-auto d-block"
							src="https://metalab-clouddrive.s3.us-west-2.amazonaws.com/profile-default.png"
							alt
						>
					</div>
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="validatedCustomFile" accept=".jpg, .jpeg, .png">
						<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        <small class="form-text text-muted">Accepts .jpg, .jpeg, and .png file types.</small>
					</div>
					<div class="form-row mt-5">
						<label for="biography">Biography</label>
						<textarea id="biography" class="form-control" rows="5" placeholder="Write about yourself."></textarea>
					</div>
					<div class="form-row mt-4">
						<label for="research">Research</label>
						<textarea id="research" class="form-control" rows="5" placeholder="Write about any research you are doing."></textarea>
					</div>

					<div class="form-row mt-4">
						<label for="funFact">Fun Fact About Me</label>
						<textarea id="funFact" class="form-control" rows="5" placeholder="Write a fun fact about yourself."></textarea>
					</div>

					<div class="form-row mt-4">
					</div>
						<label for="academicInterests">Academic Interests</label>
						<input id="academicInterests" type="text" placeholder="Write about your interests.">

					<div class="text-center pt-4 pb-4">
						<button type="submit" class="btn btn-primary" @click.prevent="submit">Save Profile</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</template>
<script>
import Choices from "choices.js"
var interests
export default {
    data() {
        return {
            form: {
                biography: null,
                research: null,
                funFacts: null,
                academicInterests: null
            }
        }
    },
	mounted() {
		interests = new Choices(
			document.querySelector("#academicInterests"),
			{
				delimiter: ",",
                removeItemButton: true,
                duplicateItemsAllowed: false,
                editItems: true
            }
        )
    },
    methods: {
        submit(){
            this.form.academicInterests = interests.getValue(true)
        }
    }
};
</script>
