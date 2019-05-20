<template>
	<div class="row">
		<div class="col-12">
			<h3 class="profile-info__header">
				<strong>Biography:</strong>
			</h3>
			<p v-if="user.bio !== null" class="profile-info__text">{{user.bio}}</p>
            <p v-else class="profile-info__text--empty">{{user.first_name}} has not written anything here yet.</p>
		</div>
		<div class="col-12">
			<h3 class="profile-info__header">
				<strong>Research:</strong>
			</h3>
			<p v-if="user.research !== null" class="profile-info__text">{{user.research}}</p>
            <p v-else class="profile-info__text--empty">{{user.first_name}} has not written anything here yet.</p>
		</div>
		<div class="col-12">
			<h3 class="profile-info__header">
				<strong>Fun Facts About Me:</strong>
			</h3>
			<p v-if="user.fun_facts !== null" class="profile-info__text">{{user.fun_facts}}</p>
            <p v-else class="profile-info__text--empty">{{user.first_name}} has not written anything here yet.</p>
		</div>
	</div>
</template>
<script>
import { mapGetters} from 'vuex';

export default {
	props: ['user'],
};
</script>
