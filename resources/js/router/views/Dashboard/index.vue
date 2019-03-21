<template>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-6 align-self-center">
				<StudentPhoto/>
			</div>
			<div class="col-6 text-left align-self-center">
				<h1 class="profile-photo__name">
					<strong>{{student.name}}</strong>
				</h1>
				<router-link to="/profile" class="profile-photo__text">View Profile</router-link>
			</div>
		</div>
		<div class="row justify-content-center">
			<BadgesEarned class="col-11 col-sm-12 col-lg-10"/>
		</div>
		<!-- calendar -->
		<!-- current assignments -->
		<!-- upcoming workshops -->
	</div>
</template>
<script>
import StudentPhoto from "../../../components/studentProfile/StudentPhoto";
import BadgesEarned from "../../../components/studentProfile/BadgesEarned";
export default {
    data() {
        return {
            student: {
                name: "Edgar Cano",
                email: "edgar.cano.111@my.csun.edu"
            }
        }
    },
	components: {
		StudentPhoto,
		BadgesEarned
	}
};
</script>

