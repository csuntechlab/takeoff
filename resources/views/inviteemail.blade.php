
<div class="container-fluid">
    <div class="email-top justify-content-center">
        <span class="text-center">Svg goes below</span>
    </div>
    <div class="email-bottom justify-content-center">
        <div class="pt-5">
            <div class="text-center email__text mx-auto"> Welcome to Takeoff!! </div>
            <div class="text-center email__text mx-auto"> Here is your access code </div>
        </div>
        <div>
            <button type="button" id="access" class="btn btn-light email__access mx-auto d-block"></button>
        </div>
        <div>
            <p class="text-center">
                <router-link to="/signup" class="email__signup">Continue signing up here</router-link>
            </p>
        </div>
    </div>
</div>

<style>
.email-top {
    background: #D5D7EB;
    height: 40%;
    width: 100%
}

.email-bottom {
    background: #7F83B1;
    height: 60%;
    width: 100%;
}

.email__text {
    color: #FCFBFB;
    font-size: 26px;
    font-weight: 200;
    line-height: 2.5rem;
}

.email__access {
    color: black;
    border: 1px #DD7D65 dotted;
    border-radius: 50px;
    padding-left: 50px;
    padding-right: 50px;
    font-size: 1.2rem;
    margin: 2rem;
}

.email__signup {
    text-decoration: underline;
    color: #FCFBFB;
    font-size: 1.2rem;
}
</style>

<script>
    document.getElementById('access').innerHTML= 'A2JK76X90';
</script>

@section ('content')
@endsection