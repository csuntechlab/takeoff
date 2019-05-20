<template>
    <div class="container py-3">
        <label class="roster__text roster__name">Manage Workshops</label>
        <div class="signup__button text-center pt-3">
            <button 
                type="button"
                class="btn btn-primary"
                @click="goToCreate"
            >Create Workshop</button>
        </div>
        <div class="signup__button text-center pt-3">
            <button type="button" class="btn btn-outline-primary">Add New Date</button>
        </div>
        <div class="pt-4">
            <WorkshopCard/>
        </div>
    </div>
</template>


<script>
import WorkshopCard from "./../../../components/workshop/WorkshopCard"
export default {
	components: {
		WorkshopCard
    },
    methods: {
        goToCreate() {
			this.$router.push("/workshop-creation");
		}
    }
}
</script>
