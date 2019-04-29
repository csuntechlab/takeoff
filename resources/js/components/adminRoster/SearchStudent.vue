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
            </div>
        </div>
    </div>
</template>


<script>
import BDropdown from "bootstrap-vue/es/components/dropdown/dropdown";
import BDropdownItem from "bootstrap-vue/es/components/dropdown/dropdown-item";
import rosterFilter from "./../../api/rosterFilter.js"

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
            rosterFilter.filterByMajorAPI (
                this.select,
                success => {
                    console.log('Yay!')
                },
                error => {
                    console.log('Error: Email not sent', this.select)
                    console.log(error)
                }
            )
        },
        filterCollege() {
            rosterFilter.filterByCollegeAPI (
                this.select,
                success => {
                    console.log('Yoyo!')
                },
                error => {
                    console.log('Error: Email not sent', this.select)
                    console.log(error)
                }
            )
        },
        filterGradDate() {
            rosterFilter.filterByGraddateAPI (
                this.select,
                success => {
                    console.log('Yuss!')
                },
                error => {
                    console.log('Error: Email not sent', this.select)
                    console.log(error)
                }
            )
        }
    }
};
</script>
