<template>
	<div class="container pt-3">
        <div class="student__title">
            Add new students
        </div>
        <div class="form-group pt-2 pb-1">
            <input
                type="text"
                class="form-control"
                placeholder="Student Name"
                maxlength="50"
            >
        </div>
	</div>
</template>

<style>
    .student__title {
        font-weight: 700;
        color: #2699FB;
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
    }
};
</script>
