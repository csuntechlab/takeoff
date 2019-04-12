<template>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-md-8 col-sm-12">
				<router-link to="/">
					<p class="text-center pt-3">
						Skip for now
						<span aria-hidden="true">&raquo;</span>
					</p>
				</router-link>
				<ProfileSetup/>
			</div>
		</div>
	</div>
</template>

<script>
import ProfileSetup from "../../../components/ProfileSetup";

export default {
	data() {
		return {};
	},

	components: {
		ProfileSetup
	}
};
</script>
