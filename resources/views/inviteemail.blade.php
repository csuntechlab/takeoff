
<div>
    <div class="email-top justify-content-center">
        <h1 class="text-center ">Takeoff</h1>
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
            <p class="text-center">
                <a href="#" class="email__signup">Continue signing up here</a>
            </p>
        </div>
    </div>
</div>

<style>
*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-size: 0.9rem;
  font-weight: 400;
  line-height: 1.6;
  color: #212529;
  text-align: left;
  background-color: #f8fafc;
}

:root {
  --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
}

.justify-content-center {
  justify-content: center !important;
}

.text-center {
  text-align: center !important;
}

.d-block {
  display: block !important;
}

.pt-5,
.py-5 {
  padding-top: 3rem !important;
}

.btn {
  display: inline-block;
  font-weight: 400;
  color: #212529;
  text-align: center;
  vertical-align: middle;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 0.9rem;
  line-height: 1.6;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.btn-light {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}
.mx-auto {
  margin-right: auto !important;
  margin-left: auto !important;
}
.email-top {
    background: #D5D7EB;
    height: 40%;
    width: 100%
    padding-top: 100px;
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