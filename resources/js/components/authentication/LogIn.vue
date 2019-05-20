<template>
        <div>
            <div class="row justify-content-center">
                <form @submit.prevent="login">
                    <h2 class="text-center text-primary mt-4 pt-2"> Login </h2>
                    <div class="form-group form__email mt-5">
                        <label for="exampleInputEmail1">Email: </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" v-model="form.email">
                    </div>
                    <div class="form-group mt-4">
                        <label for="exampleInputPassword1">Password: </label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" v-model="form.password">
                    </div>
                    <div class="login__button text-center pt-4">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>

                    <div class="login__button text-center pt-3">
                        <button type="button" class="btn btn-outline-primary" @click="goToSignup">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
</template>

<script>
import { mapActions } from "vuex";

export default {
    name: 'LogIn',
    data() {
        return{
            form: {
                email: null,
                password: null,
            }
        };
    },
    methods: {
        goToSignup(){
            this.$router.push('signup')
        },
        login(){
            this.$store.dispatch("login", this.form);
        }
    }
}
</script>
