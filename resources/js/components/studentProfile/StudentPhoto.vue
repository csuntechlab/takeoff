<template>
	<div class="row justify-content-end py-3 px-2">
		<div class="col-12">
			<div class="text-center float-right">
				<img
					class="profile-photo__image"
					src="https://metalab-clouddrive.s3.us-west-2.amazonaws.com/profile-default.png"
				>
				<div v-if="editable" class="profile-photo__text mt-3">
					<router-link to="/edit-profile">
						<strong>
							<i class="fas fa-user-edit"/> Edit Profile
						</strong>
					</router-link>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
export default {
	props: {
		editable: {
			default: false
		}
	}
};
</script>

