<template>
	<div class="text-left">
		<h1 class="profile-photo__name"><strong>{{name}}</strong></h1>
        <div class="profile-photo__text"><strong>Major: </strong>{{major}}</div>
        <div class="profile-photo__text"><strong>Units Earned: </strong>{{units}}</div>
        <div class="profile-photo__text"><strong>Graduation: </strong>{{grad}}</div>
	</div>
</template>
<script>
export default {
    data() {
        return{
            name: "Edgar Cano",
            major: "Computer Engineering",
            units: 75,
            grad: "Spring 2022"
        }
    }
};
</script>
