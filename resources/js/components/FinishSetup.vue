<template>
	<div>
        <div class="py-3 text-white bg-primary justify-content-center">
            <h4 class="text-center">Finish Setting Up Your Profile</h4>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <form>
                    <a href="#"><p class="text-center pt-3">Skip for now <span aria-hidden="true">&raquo;</span></p></a>
                    <div><img class="profile-thumbnail pb-4 pt-2" src="https://metalab-clouddrive.s3.us-west-2.amazonaws.com/profile-default.png" alt=""></div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                    <div class="form-row mt-5">
                        <label for="exampleInputFirstName">Biography: </label>
                        <textarea class="form-control" rows="5" placeholder="Lorem Ipsum bla bla bla"></textarea>
                    </div>
                    <div class="form-row mt-4">
                        <label for="exampleInputLastName">Research: </label>
                        <textarea class="form-control" rows="5" placeholder="Lorem Ipsum bla bla bla"></textarea>
                    </div>

                    <div class="form-row mt-4">
                        <label for="exampleInputLastName">Fun Fact About Me: </label>
                        <textarea class="form-control" rows="5" placeholder="Lorem Ipsum bla bla bla"></textarea>
                    </div>

                    <div class="form-row mt-4">
                        <label for="exampleInputLastName">Academic Interest: </label>
                        <textarea class="form-control" rows="5" placeholder=""></textarea>
                    </div>

                    <div class="text-center pt-4 pb-4">
                        <button type="submit" class="btn btn-primary">Save Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: '',
        data() {
            return{};
        }
    }
</script>
