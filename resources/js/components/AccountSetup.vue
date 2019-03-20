<template>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-md-10 col-sm-12">
				<form>
					<div class="form-group mt-5">
						<label for="exampleInputFirstName">First Name:</label>
						<input type="text" class="form-control" placeholder="First name">
					</div>
					<div class="form-group mt-4">
						<label for="exampleInputLastName">Last Name:</label>
						<input type="text" class="form-control" placeholder="Last Name">
					</div>

					<label>College</label>
					<div class="input-group">
						<select
							class="custom-select"
							id="inputGroupSelect04"
							aria-label="Example select with button addon"
						>
							<option selected>Choose...</option>
							<option value="1">Cal State LA</option>
							<option value="2">Cal State Santa Barbara<</option>
							<option value="3">Cal State Northridge</option>
						</select>
					</div>

					<label class="pt-3">Major</label>
					<div class="input-group">
						<select
							class="custom-select"
							id="inputGroupSelect04"
							aria-label="Example select with button addon"
						>
							<option selected>Choose...</option>
							<option value="1">Biochemistry</option>
							<option value="2">Mathematics</option>
							<option value="3">Kinesiology</option>
						</select>
					</div>

					<div class="form-row">
						<div class="col pt-3">
							<label>Expected Grad</label>
							<div class="input-group">
								<select
									class="custom-select"
									id="inputGroupSelect04"
									aria-label="Example select with button addon"
								>
									<option selected>Choose...</option>
									<option value="1">2019</option>
									<option value="2">2020</option>
									<option value="3">2021</option>
								</select>
							</div>
						</div>
						<div class="col pt-3">
							<label>Credits</label>
							<input
								class="form-control"
								type="number"
								id="name"
								name="name"
								required
								placeholder="80"
								size="10"
							>
						</div>
					</div>
					<div class="text-center pt-4">
						<button type="submit" class="btn btn-primary">Complete Registration</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</template>

<script>
import BDropdown from "bootstrap-vue/es/components/dropdown/dropdown";
export default {
	components: {
		"b-dropdown": BDropdown
	},
	name: "",
	data() {
		return {};
	}
};
</script>
