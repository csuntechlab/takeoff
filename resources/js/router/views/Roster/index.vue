<template>
	<div class="container">
		<div>
			<AddStudent/>
		</div>
		<div>
			<SearchStudent/>
		</div>
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
				<RosterCard v-for="(user, index) in paginated('users')" :key="index" :user="user"/>
			</paginate>
		</div>
	</div>
</template>
<script>
import { mapState, mapGetters } from "vuex";
import AddStudent from "../../../components/adminRoster/AddStudent";
import RosterCard from "../../../components/adminRoster/RosterCard";
import SearchStudent from "../../../components/adminRoster/SearchStudent";
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
		AddStudent,
		RosterCard,
		SearchStudent
    }
};
</script>
