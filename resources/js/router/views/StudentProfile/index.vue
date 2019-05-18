<template>
    <div v-if="user === null" class="container"></div>
	<div v-else class="container">
		<div class="row justify-content-center">
			<div class="col-6 align-self-center">
                <StudentPhoto v-if="isUserProfile" :editable="true" :user="user"/>
				<StudentPhoto v-else :user="user"/>
			</div>
			<div class="col-6 align-self-center">
				<StudentInfo :user="user"/>
			</div>
		</div>
        <div class="row justify-content-center">
			<BadgesEarned :user="user" class="col-11 col-sm-12 col-lg-10"/>
			<ProfileInfo :user="user" class="col-11 col-sm-12 col-lg-10"/>
            <CurrentInterests :interests="user.interests" class="col-11 col-sm-12 col-lg-10"/>
        </div>
	 </div>
</template>
<script>
import StudentPhoto from "../../../components/studentProfile/StudentPhoto";
import StudentInfo from "../../../components/studentProfile/StudentInfo";
import BadgesEarned from "../../../components/studentProfile/BadgesEarned";
import ProfileInfo from "../../../components/studentProfile/ProfileInfo";
import CurrentInterests from "../../../components/studentProfile/CurrentInterests";
import Profile from "../../../api/Profile"
export default {
    props: ['id'],
    data() {
        return {
            user: null
        }
    },
    mounted() {
        Profile.fetchUserInfoAPI(
            this.id,
            success => {
                this.user = success[0];
                if(this.user.title != 'Student')
                    this.$router.push('/error')
                else
                    this.user.interests = this.user.academic_interest.split(',');
            },
            error => {
                console.error(error);
                this.$router.push('/error')
            }
        )
    },
    computed: {
        isUserProfile(){
            return this.id == window.localStorage.getItem('userId')
        }
    },
	components: {
		StudentPhoto,
		StudentInfo,
		BadgesEarned,
        ProfileInfo,
        CurrentInterests
	}
};
</script>

