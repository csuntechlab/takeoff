<template>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-6 align-self-center">
				<StudentPhoto :editable="true"/>
			</div>
			<div class="col-6 align-self-center">
				<StudentInfo/>
			</div>
		</div>
        <div class="row justify-content-center">
			<BadgesEarned class="col-11 col-sm-12 col-lg-10"/>
			<ProfileInfo class="col-11 col-sm-12 col-lg-10"/>
            <CurrentInterests :interests="student.interests" class="col-11 col-sm-12 col-lg-10"/>
        </div>
	 </div>
</template>
<script>
import StudentPhoto from "../../../components/studentProfile/StudentPhoto";
import StudentInfo from "../../../components/studentProfile/StudentInfo";
import BadgesEarned from "../../../components/studentProfile/BadgesEarned";
import ProfileInfo from "../../../components/studentProfile/ProfileInfo";
import CurrentInterests from "../../../components/studentProfile/CurrentInterests";
export default {
    data() {
        return {
            student: {
                interests: ["Apple", "Bapple", "Citrus", "Durian", "Elephant", "Fruit"]
            }
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

