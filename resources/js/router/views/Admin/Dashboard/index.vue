<template>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-6 align-self-center">
				<StudentPhoto/>
			</div>
			<div class="col-6 text-left align-self-center">
				<h1 class="profile-photo__name">
					<strong>{{admin.name}}</strong>
				</h1>
				<router-link to="/profile" class="profile-photo__text">View Profile</router-link>
			</div>
		</div>
	</div>
</template>
<script>
import StudentPhoto from "../../../components/studentProfile/StudentPhoto";
export default {
    data() {
        return {
            admin: {
                name: "Bradley Booper",
                email: "edgar.cano.111@my.csun.edu"
            }
        }
    },
	components: {
		StudentPhoto
	}
};
</script>

