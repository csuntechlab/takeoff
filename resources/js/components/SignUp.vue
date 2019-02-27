<template>
    <div>
        <nav class="navbar navbar-dark bg-primary justify-content-center">
            <h1 class="text-center">Badges</h1>
        </nav>
        <div class="container">
            <div class="row justify-content-center">
                <form @submit.prevent="signup" class="panel">
                    <h2 class="text-center"> Sign Up! </h2>
                    <div class="form-group form__email">
                        <label for="exampleInputEmail1">Email: </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" v-model="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAccessCode">Access Code: </label>
                        <input type="text" class="form-control" id="exampleInputAccessCode" placeholder="Access Code" v-model="access">
                    </div>
                    <div class="signup__button text-center">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                    <div class="signup__button text-center">
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
