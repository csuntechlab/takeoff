<template>
	<div>
		<div class="row">
			<div class="col-5">
				<StudentPhoto></StudentPhoto>
			</div>
			<div class="col-7">
				<StudentInfo></StudentInfo>
			</div>
		</div>
		<BadgesEarned></BadgesEarned>
		<ProfileInfo></ProfileInfo>
	</div>
</template>
<script>
import StudentPhoto from "../../../components/studentProfile/StudentPhoto";
import StudentInfo from "../../../components/studentProfile/StudentInfo";
import BadgesEarned from "../../../components/studentProfile/BadgesEarned";
import ProfileInfo from "../../../components/studentProfile/ProfileInfo";
export default {
	components: {
		StudentPhoto,
		StudentInfo,
		BadgesEarned,
		ProfileInfo
	}
};
</script>

