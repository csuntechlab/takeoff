<template>
    <div class="container">
        <div>
            <AddStudent/>
        </div>
        <div>
            <SearchStudent/>
        </div>
        <div>
            <RosterCard v-for="(student, index) in students" :key="index" :students="student"/>
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
    },
    data () {
        return{
            students: [
                {name: "Steven", major: "Psychology"},
                {name: "Anneline", major: "Nuclear Physics"},
                {name: "Mark", major: "Computer Science"}
                
            ]
        }
    }
};
</script>
