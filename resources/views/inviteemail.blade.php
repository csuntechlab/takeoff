@extends('spa')
{{-- <div class="container-fluid">
    <div class=" row email email__top">
        <h1>Random</h1>
    </div>


    <div class=" row email email__bottom">
        <div>Welcome to Takeoff!!</div>
        <div>Here is your access code</div>
        <div><button type="button" class="btn btn-link">Access Code</button></div>
    </div>
</div> --}}


<div>
    <div class="email-top justify-content-center">
        <h1 class="text-center">Badges</h1>
    </div>
    <div class="email-bottom justify-content-center">
        <div class="pt-5">
            <div class="text-center email__text"> Welcome to Takeoff!! </div>
            <div class="text-center email__text"> Here is your access code </div>
        </div>
        <div>
            <button type="button" class="btn btn-light email__access mx-auto d-block mt-2">A2JK76X90</button>
        </div>
        <div class="text-center pt-3">
            <a><router-link to="/signup" type="text" class="email__signup">Continue signing up here</router-link></a>
        </div>

        {{-- <button type="button" class="btn btn-link">Link --}}
    </div>
</div>




@section('content')
@endsection