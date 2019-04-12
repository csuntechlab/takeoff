
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div class="container">
        <h1>Create Profile</h1>
        {!! Form::open(['action'=> 'ProfileController@store', 'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('first_name', 'first_name')}}
            {{Form::text('first_name', '', ['class'=> 'form-control', 'placeholder' => 'first_name'])}}
        </div>
        <div class="form-group">
            {{Form::label('last_name', 'last_name')}}
            {{Form::text('last_name', '', ['class'=> 'form-control', 'placeholder' => 'last_name'])}}
        </div>
        <div class="form-group">
            {{Form::label('major', 'Major')}}
            {{Form::text('major', '', ['class'=> 'form-control', 'placeholder' => 'major'])}}
        </div>
        <div class="form-group">
            {{Form::label('units', 'units')}}
            {{Form::text('units', '', ['class'=> 'form-control', 'placeholder' => 'units'])}}
        </div>
        <div class="form-group">
            {{Form::label('grad_date', 'grad_date')}}
            {{Form::text('grad_date', '', ['class'=> 'form-control', 'placeholder' => 'grad_date'])}}
        </div>
        <div class="form-group">
            {{Form::label('college', 'college')}}
            {{Form::text('college', '', ['class'=> 'form-control', 'placeholder' => 'college'])}}
        </div>
        <div class="form-group">
            {{Form::label('bio', 'bio')}}
            {{Form::text('bio', '', ['class'=> 'form-control', 'placeholder' => 'bio'])}}
        </div>
        <div class="form-group">
            {{Form::label('research', 'research')}}
            {{Form::text('research', '', ['class'=> 'form-control', 'placeholder' => 'research'])}}
        </div>
        <div class="form-group">
            {{Form::label('fun_facts', 'fun_facts')}}
            {{Form::text('fun_facts', '', ['class'=> 'form-control', 'placeholder' => 'fun_facts'])}}
        </div>
        <div class="form-group">
            {{Form::label('academic_interest', 'academic_interest')}}
            {{Form::text('academic_interest', '', ['class'=> 'form-control', 'placeholder' => 'academic_interest'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}

    </div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>