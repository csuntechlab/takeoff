<template>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary text-center" role="navigation">
		<div class="navbar-brand">
			<!-- <i class="fas fa-home"/> -->
            Takeoff
		</div>
		<!-- <div v-if="isMobile" class="nav__header">{{$route.meta.header}}</div> -->
		<b-navbar-toggle target="nav_collapse"/>
		<b-collapse is-nav id="nav_collapse">
			<ul class="navbar-nav mr-auto">
                <li class="nav-item">
					<router-link class="nav-link" to="/">Dashboard</router-link>
				</li>
				<li class="nav-item">
					<router-link class="nav-link" to="/profile">My Profile</router-link>
				</li>
				<li class="nav-item" @click="logout">
					<router-link class="nav-link" to="/login">Logout</router-link>
				</li>
			</ul>
		</b-collapse>
	</nav>
</template>
<script>
import BNavbarToggle from "bootstrap-vue/es/components/navbar/navbar-toggle";
import BCollapse from "bootstrap-vue/es/components/collapse/collapse";
export default {
	components: {
		BNavbarToggle,
		BCollapse
    },
    methods: {
        logout() {
            this.$store.dispatch("logout", window.localStorage.getItem("userId"))
        }
    }
};
</script>

