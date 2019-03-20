@extends('spa')
<div>
    <div class="email-top justify-content-center">
        <h1 class="text-center">Svg goes below</h1>
    </div>
    <div class="email-bottom justify-content-center">
        <div class="pt-5">
            <span class="text-center email__text d-block"> Welcome to Takeoff!! </span>
            <span class="text-center email__text d-block"> Here is your access code </span>
        </div>
        <div>
            <button type="button" id="access" class="btn btn-light email__access mx-auto d-block"></button>
        </div>
        <div>
            <p class="text-center"><router-link to="/signup" type="text" class="email__signup">Continue signing up here</router-link></p>
        </div>
    </div>
</div>

<script>
    document.getElementById('access').innerHTML= 'A2JK76X90';
</script>
@section('content')
@endsection