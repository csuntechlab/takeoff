<template>
	<div class="row">
		<div class="col-12">
			<h3 class="profile-info__header">
				<strong>Biography:</strong>
			</h3>
			<p class="profile-info__text">{{student.biography}}</p>
		</div>
		<div class="col-12">
			<h3 class="profile-info__header">
				<strong>Research:</strong>
			</h3>
			<p class="profile-info__text">{{student.research}}</p>
		</div>
		<div class="col-12">
			<h3 class="profile-info__header">
				<strong>Fun Facts About Me:</strong>
			</h3>
			<p class="profile-info__text">{{student.facts}}</p>
		</div>
	</div>
</template>
<script>
export default {
	data() {
		return {
			student: {
				biography:
					"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris erat, aliquam in eleifend in, tempus sit amet urna. Curabitur ultricies bibendum diam sed tincidunt. Nullam quis condimentum velit. Nulla sed felis ac mi vehicula eleifend. Sed eget erat bibendum, consequat diam ut, mollis tortor.",
				research:
					"Nulla venenatis dapibus vulputate. Duis nisi dui, hendrerit et enim eget, gravida accumsan ex. Phasellus tincidunt enim metus, in consequat diam molestie convallis. Aenean eu urna vitae arcu malesuada vehicula. Vivamus dignissim orci lacus, ultricies tincidunt quam ullamcorper non.",
				facts: "I love to read!"
			}
		};
	}
};
</script>
