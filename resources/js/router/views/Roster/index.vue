<template>
    <div class="container">
        <div>
            <RosterCard/>
        </div>
        <div>

        </div>
    </div>
</template>

<script>
import AddStudent from "../../../components/adminRoster/AddStudent";
import RosterCard from "../../../components/adminRoster/RosterCard";
import SearchStudent from "../../../components/adminRoster/SearchStudent";
export default {
	components: {
		AddStudent,
		RosterCard,
		SearchStudent
	}
};
</script>
