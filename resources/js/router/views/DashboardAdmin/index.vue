<template>
	<div class="container justify-content-center">
		<div class="text-left text-primary px-3">
			<h2 class="pt-4 font-weight-bold">{{admin.name}}</h2>
			<span>{{admin.title}}</span>
		</div>
	</div>
</template>
<script>
export default {
    data() {
        return {
            admin: {
                name: "Bradley Booper",
                title: "Administrator"
            }
        }
    },
	components: {}
};
</script>

