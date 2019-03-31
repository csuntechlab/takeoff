<template>
    <div class="container">
        <div>
            <AddStudent/>
        </div>
        <div>
            <SearchStudent/>
        </div>
        <div>
            <RosterCard/>
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
