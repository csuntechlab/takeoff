<template>
    <div>
        <div class="py-3 text-white bg-primary justify-content-center">
            <h4 class="text-center">Profile Setup</h4>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <form>
                    <div class="form-group form__email mt-5">
                        <label for="exampleInputFirstName">First Name: </label>
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="form-group mt-4">
                        <label for="exampleInputLastName">Last Name: </label>
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="text-center pt-4">
                        <button type="submit" class="btn btn-primary">Complete Registration</button>
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
