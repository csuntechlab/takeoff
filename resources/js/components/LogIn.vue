<template>
    <div>
        <nav class="navbar navbar-dark bg-primary justify-content-center">
            <h1 class="text-center">Badges</h1>
        </nav>
        <div class="container">
            <div class="row justify-content-center">
                <form @submit.prevent="login" class="panel">
                    <h2 class="text-center"> Login </h2>
                    <div class="form-group form__email">
                        <label for="exampleInputEmail1">Email: </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" v-model="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password: </label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" v-model="password">
                    </div>
                    <div class="login__button text-center">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <div class="login__button text-center">
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
