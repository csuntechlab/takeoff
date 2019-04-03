<template>
    <div class="container pb-3">
        <div class="student__title">
            Enrolled Students
        </div>
        <b-row class="form-group pt-2 pb-1">
            <b-col cols="8">
            <input
                type="text"
                class="form-control"
                placeholder="Search"
                maxlength="50"
            > 
            </b-col>
            <b-col cols="4" >
                <b-dropdown text="Filters" variant="light" class="justify-content-right">
                    <b-dropdown-item href="#">Action</b-dropdown-item>
                    <b-dropdown-item href="#">Another action</b-dropdown-item>
                    <b-dropdown-item href="#">Something else here</b-dropdown-item>
                </b-dropdown>
            </b-col>
        </b-row>
    </div>
</template>

<style>
    
</style>

<script>

import BDropdown from "bootstrap-vue/es/components/dropdown/dropdown";
import BCol from "bootstrap-vue/es/components/layout/col";
import BRow from "bootstrap-vue/es/components/layout/row";
import BDropdownItem from "bootstrap-vue/es/components/dropdown/dropdown-item";

export default {
	components: {
        "b-row": BRow,
        "b-col": BCol,
        "b-dropdown": BDropdown,
        "b-dropdown-item":BDropdownItem
    }
};
</script>
