<template>
	<div class="text-left">
		<h1 class="profile-photo__name"><strong>{{user.first_name}} {{user.last_name}}</strong></h1>
        <div class="profile-photo__text"><strong>Major: </strong>{{user.major}}</div>
        <div class="profile-photo__text"><strong>Graduation: </strong>{{user.grad_date}}</div>
	</div>
</template>
<script>
export default {
    props: ['user']
};
</script>
