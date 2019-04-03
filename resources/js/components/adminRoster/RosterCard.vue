<template>
	<div class="container">
        <b-card class="roster__card" text-variant="primary">
            <b-card-text class="roster__text">
                <b-row>
                    <b-col cols="3" sm="3">
                        <img class="roster__image" src="https://via.placeholder.com/100x100">
                    </b-col>
                    <b-col cols="7" sm="7">
                        <span class="roster__name">{{students.name}}</span>
                        <div>{{students.major}}</div>
                    </b-col>
                    <b-col cols="auto" sm="auto" class="justify-content-right">
                        <p>X</p>
                    </b-col>
                </b-row>
            </b-card-text>
        </b-card>
	</div>
</template>

<style>
    .roster__card {
        background: #BCE0FD;
        display: block;
    } 
    .roster__text {
        color: #2699FB;
    }
    .roster__image {
        width: 3rem;
        padding-left: .5rem;
    }
    .roster__name {
        font-weight: 600;
    }
</style>

<script>
import BCardText from "bootstrap-vue/es/components/card/card-text";
import BCard from "bootstrap-vue/es/components/card/card";
import BCol from "bootstrap-vue/es/components/layout/col";
import BRow from "bootstrap-vue/es/components/layout/row";

export default {
	components: {
        "b-card-text": BCardText,
        "b-card": BCard,
        "b-row": BRow,
        "b-col": BCol
    },
    props: ['students']
    
};
</script>
