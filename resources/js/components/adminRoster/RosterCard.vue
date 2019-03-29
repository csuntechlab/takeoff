<template>
	<div class="container">
		<div class="">
			<h2>
				<strong>Something here</strong>
			</h2>
            <b-card class="roster__card" text-variant="primary">
                <b-card-text class="roster__text">
                    <div class="row">
                        <span class="row col-sm-4">
                            <img class="roster__image" src="../../../../public/images/default-avatar.png">
                        </span>
                        <span class="row col-sm-8">
                            <span>Steven Barbara Fitzgerald</span>
                            <div>Psychology</div>
                        </span>
                    </div>
                </b-card-text>
            </b-card>
		</div>
	</div>
</template>

<style>
    .roster__card {
        background: #BCE0FD;
    } 
    .roster__text {
        color: #2699FB;
    }
    .roster__image {
        width: 3.5rem;
        padding-left: 1rem;
        left: 30px;
    }
</style>

<script>
import BCardText from "bootstrap-vue/es/components/card/card-text";
import BCard from "bootstrap-vue/es/components/card/card";
export default {
	components: {
        "b-card-text": BCardText,
        "b-card": BCard
    }
};
</script>
