<template>
    <div class="container py-3">
        <div>
            <AttendanceCard :user="user"/>
            <div>
                <paginate-links
                    for="users"
                    class="text-center"
                    :limit="3"
                    :show-step-links="true"
                    :step-links="{
                        next: '>',
                        prev: '<'
                    }"
                ></paginate-links>
                <paginate class="roster__list" name="users" :list="users" :per="20">
                    <AttendanceCard v-for="(user, index) in paginated('users')" :key="index" :user="user"/>
                </paginate>
            </div>
        </div>
    </div>
</template>

<style>
    
</style>

<script>
import { mapState, mapGetters } from "vuex";
import AttendanceCard from "./../../../components/adminRoster/AttendanceCard";

export default {
	data() {
		return {
			usersOnPage: null,
			paginate: ["users"]
		};
	},
	mounted() {
		this.$store.dispatch("fetchAllUsers");
	},
	computed: {
		...mapState({
			users: state => state.Admin.users
		})
	},
	components: {
		AttendanceCard
	}
};
</script>

