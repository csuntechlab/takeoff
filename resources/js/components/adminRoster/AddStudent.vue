<template>
	<div class="container pt-3">
        <div class="label">
            Add new students
        </div>
        <div class="input-group mt-2 mb-3">
        <input type="text" class="form-control" placeholder="Student name" maxlength="50">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">Add</button>
            </div>
        </div>
	</div>
</template>


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
