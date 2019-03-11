<template>
	<div class="row justify-content-end py-3 px-2">
		<div class="col-12">
			<div class="text-center float-right">
				<div>
					<img class="profile-photo__image" src="../../../../public/images/default-avatar.png">
				</div>
				<div v-if="editable" class="mt-3">
					<a>Edit Your Profile</a>
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

