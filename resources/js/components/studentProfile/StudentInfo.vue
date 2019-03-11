<template>
	<div class="text-left">
		<div class="profile-photo__name">{{name}}</div>
        <div class="profile-photo__text"><strong>Major: </strong>{{major}}</div>
        <div class="profile-photo__text"><strong>Units Earned: </strong>{{units}}</div>
        <div class="profile-photo__text"><strong>Graduation Date: </strong>{{grad}}</div>
	</div>
</template>
<script>
export default {
    data() {
        return{
            name: "Edgar Cano",
            major: "Psychology",
            units: 75,
            grad: "Spring 2022"
        }
    }
};
</script>
