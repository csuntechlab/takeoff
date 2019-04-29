import Vue from 'vue';
import Vuex from 'vuex';
import Global from './modules/global';
import Profile from './modules/profile';
import AccountSetup from './modules/accountSetup';
import Admin from './modules/admin'
import Auth from './modules/auth';

Vue.use(Vuex);

export default new Vuex.Store({
    strict: process.env.NODE_ENV !== 'production',
    modules: {
        //write modules here
        Global,
        Profile,
        AccountSetup,
        Admin,
        Auth
    }
});
