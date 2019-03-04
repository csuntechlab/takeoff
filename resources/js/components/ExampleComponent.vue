<template>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card card-default">
					<div class="card-header">Example Component</div>
					<div class="card-body">I'm an example component.
						<i class="fab fa-accessible-icon"></i>
						<b-button>Dab</b-button>
                        <b-alert show>NOOOO</b-alert>
						<button class="btn btn-primary">Dab</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import BButton from 'bootstrap-vue/es/components/button/button'
import BAlert from 'bootstrap-vue/es/components/alert/alert'
export default {
    components: {
        'b-button' : BButton,
        'b-alert' : BAlert
    }
};
</script>
