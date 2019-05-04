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
                <b-dropdown text="Filters" variant="primary" v-model="select">
                    <b-dropdown-item href="#"><button type="button" class="btn btn-outline-primary" data-toggle="button" aria-pressed="false" autocomplete="off" @click="filterCollege">Search by college</button></b-dropdown-item>
                    <b-dropdown-item href="#"><button type="button" class="btn btn-outline-primary" data-toggle="button" aria-pressed="false" autocomplete="off" @click="filterGradDate">Search by graduation date</button></b-dropdown-item>
                    <b-dropdown-item href="#"><button type="button" class="btn btn-outline-primary" data-toggle="button" aria-pressed="false" autocomplete="off" @click="filterMajor">Search by major</button></b-dropdown-item> 
                </b-dropdown>
                <!-- Changes are being made to the ui for the filter dropdown, the above will be changed once the ui is determined -->
            </div>
        </div>
    </div>
</template>


<script>
import BDropdown from "bootstrap-vue/es/components/dropdown/dropdown";
import BDropdownItem from "bootstrap-vue/es/components/dropdown/dropdown-item";

export default {
    data () {
        return {
            select: ''
        }
    },
	components: {
        "b-dropdown": BDropdown,
        "b-dropdown-item":BDropdownItem
    },
    methods: {
        filterMajor() {
            this.$store.dispatch('filterByMajor', payload)
        }
    }
};
</script>
