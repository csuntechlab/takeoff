<template>
	<div class="container">
		<div class="text-primary px-3">
			<h2 class="pt-4 font-weight-bold">{{user.firstName}} {{user.lastName}}</h2>
			<span>{{user.title}}</span>
		</div>
	</div>
</template>
<script>
import { mapState } from 'vuex'
export default {
    computed: {
        ...mapState({
            user: state => state.Auth.user
        })

    }
};
</script>

