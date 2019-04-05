<template>
	<div class="container justify-content-center mx-auto d-block">
		<div class="text-center">
			<h1>
				<strong>{{admin.name}}</strong>
			</h1>
			<h2>
				<p>{{admin.title}}</p>
			</h2>
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

