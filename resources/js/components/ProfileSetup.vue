<template>
    <div>
        <div class="py-3 text-white bg-primary justify-content-center">
            <h4 class="text-center">Profile Setup</h4>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <form>
                    <div class="form-group mt-5">
                        <label for="exampleInputFirstName">First Name: </label>
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="form-group mt-4">
                        <label for="exampleInputLastName">Last Name: </label>
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>

                    <div class="dropdown pt-2">
                        <label for="exampleInputLastName">College </label>
                        <div class=" dropdown-toggle form-control" type="text" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Choose College
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Cal State LA</a>
                            <a class="dropdown-item" href="#">Cal State Santa Barbara</a>
                            <a class="dropdown-item" href="#">Cal State Northridge</a>
                        </div>
                    </div>

                    <div class="dropdown pt-3">
                        <label>Major </label>
                        <div class=" dropdown-toggle form-control" type="text" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Choose Major
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Biochemistry</a>
                            <a class="dropdown-item" href="#">Mathematics</a>
                            <a class="dropdown-item" href="#">Kinesiology</a>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col pt-3">
                            <label>Expected Grad </label>
                            <div class=" dropdown-toggle form-control" type="text" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Choose Year
                            </div>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">2019</a>
                                <a class="dropdown-item" href="#">2020</a>
                                <a class="dropdown-item" href="#">2021</a>
                            </div>
                        </div>
                        <div class="col pt-3">
                            <label>Credits </label>
                            <input type="text" class="form-control" placeholder="80">
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
    export default {
        name: '',
        data() {
            return{};
        }
    }
</script>
