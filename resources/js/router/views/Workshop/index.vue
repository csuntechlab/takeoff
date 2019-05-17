<template>
    <div class="container py-3">
        <label class="roster__text roster__name">Manage Workshops</label>
        <div class="signup__button text-center pt-3">
            <router-link to="/workshop-creation" type="submit" class="btn btn-primary">Create Workshop</router-link>
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
	}
}
</script>
