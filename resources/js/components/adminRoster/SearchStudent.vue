<template>
    <div class="pb-3">
        <div class="student__title text-primary">
            Enrolled Students
        </div>
        <div class="row form-group pt-2 pb-1">
            <div class="col-8">
            <input
                type="text"
                class="form-control"
                placeholder="Search"
                maxlength="50"
            > 
            </div>
            <div class="text-right col-4">
                <b-dropdown text="Filters" variant="light">
                    <b-dropdown-item href="#">Action</b-dropdown-item>
                    <b-dropdown-item href="#">Another action</b-dropdown-item>
                    <b-dropdown-item href="#">Something else here</b-dropdown-item>
                </b-dropdown>
            </div>
        </div>
    </div>
</template>


<script>
import BDropdown from "bootstrap-vue/es/components/dropdown/dropdown";
import BDropdownItem from "bootstrap-vue/es/components/dropdown/dropdown-item";

export default {
	components: {
        "b-dropdown": BDropdown,
        "b-dropdown-item":BDropdownItem
    }
};
</script>
