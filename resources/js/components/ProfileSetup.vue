<template>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-md-8 col-sm-12">
				<form>
					<a href="#">
						<p class="text-center pt-3">
							Skip for now
							<span aria-hidden="true">&raquo;</span>
						</p>
					</a>
					<div>
						<img
							class="profile-thumbnail pb-4 pt-2 mx-auto d-block"
							src="https://metalab-clouddrive.s3.us-west-2.amazonaws.com/profile-default.png"
							alt
						>
					</div>
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="validatedCustomFile">
						<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
						<div class="invalid-feedback">Example invalid custom file feedback</div>
					</div>
					<div class="form-row mt-5">
						<label>Biography:</label>
						<textarea class="form-control" rows="5" placeholder="Lorem Ipsum bla bla bla"></textarea>
					</div>
					<div class="form-row mt-4">
						<label>Research:</label>
						<textarea class="form-control" rows="5" placeholder="Lorem Ipsum bla bla bla"></textarea>
					</div>

					<div class="form-row mt-4">
						<label>Fun Fact About Me:</label>
						<textarea class="form-control" rows="5" placeholder="Lorem Ipsum bla bla bla"></textarea>
					</div>

					<div class="form-row mt-4">
					</div>
						<label for="academicInterests">Academic Interests:</label>
						<input id="academicInterests" type="text" placeholder="Enter a new interest">

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
