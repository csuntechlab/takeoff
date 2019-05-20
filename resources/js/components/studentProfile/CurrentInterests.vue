<template>
	<div class="row">
		<div class="col-12">
			<h3 class="profile-info__header">
				<strong>Current Interests:</strong>
			</h3>
			<div class="choices__list choices__list--multiple">
				<div v-for="(interest, index) in interests" :key="index" class="choices__item">{{interest}}</div>
			</div>
		</div>
	</div>
</template>
<script>
import Choices from "choices.js";
export default {
    props: ["interests"]
};
</script>
