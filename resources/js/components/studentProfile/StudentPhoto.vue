<template>
	<div class="row justify-content-end py-3 px-2">
		<div class="col-12">
			<div class="text-center float-right">
				<img class="profile-photo__image" src="">
				<!-- ../../../../public/images/default-avatar.png -->
				<!-- make this div a router-link once the edit page is set up -->
				<div v-if="editable" class="profile-photo__text mt-3">
					<strong><i class="fas fa-user-edit"/> Edit Profile</strong>
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

