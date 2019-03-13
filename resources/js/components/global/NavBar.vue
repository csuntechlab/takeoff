<template>
	<div>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<router-link class="navbar-brand" to="/">
				<i class="fas fa-home"/>
			</router-link>
			<b-navbar-toggle target="nav_collapse"/>
			<b-collapse is-nav id="nav_collapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<router-link class="nav-link" to="/profile">My Profile</router-link>
					</li>
					<li class="nav-item">
						<router-link class="nav-link" to="/login">Logout</router-link>
					</li>
				</ul>
			</b-collapse>
		</nav>
	</div>
</template>
<script>;
import BNavbarToggle from "bootstrap-vue/es/components/navbar/navbar-toggle";
import BCollapse from "bootstrap-vue/es/components/collapse/collapse";
export default {
	components: {
		BNavbarToggle,
		BCollapse
	}
};
</script>

