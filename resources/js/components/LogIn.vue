<template>
    <div>
        <div class="py-5 text-white bg-primary justify-content-center">
            <h1 class="text-center">Badges</h1>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <form @submit.prevent="login">
                    <h2 class="text-center text-primary mt-4 pt-2"> Login </h2>
                    <div class="form-group form__email mt-5">
                        <label for="exampleInputEmail1">Email: </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" v-model="email">
                    </div>
                    <div class="form-group mt-4">
                        <label for="exampleInputPassword1">Password: </label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" v-model="password">
                    </div>
                    <div class="login__button text-center pt-4">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <div class="login__button text-center pt-3">
                        <router-link to="/signup" type="button" class="btn btn-outline-primary">Sign Up!</router-link>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'LogIn',
        data() {
            return{
                email: null,
                password: null,
            };
        },
        methods: {
            login(){
                
            }
        }
    }
</script>
