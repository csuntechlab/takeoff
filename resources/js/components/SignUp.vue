<template>
    <div>
        <div class="py-5 text-white bg-primary justify-content-center">
            <h1 class="text-center">Badges</h1>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <form @submit.prevent="signup">
                    <h2 class="text-center text-primary mt-4 pt-2"> Sign Up! </h2>
                    <div class="form-group form__email mt-5">
                        <label for="exampleInputEmail1">Email: </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" v-model="email">
                    </div>
                    <div class="form-group mt-4">
                        <label for="exampleInputAccessCode">Access Code: </label>
                        <input type="text" class="form-control" id="exampleInputAccessCode" placeholder="Access Code" v-model="access">
                    </div>
                    <div class="signup__button text-center pt-4">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                    <div class="signup__button text-center pt-3">
                        <router-link to="/login" type="button" class="btn btn-outline-primary">Already have an account?</router-link>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'SignUp',
        data() {
            return{
                email: null,
                access: null,
            };
        },
        methods: {
            signup(){
                
            }
        }
    }
</script>
