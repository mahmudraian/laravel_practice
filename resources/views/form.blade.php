<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    {{-- <pre>
    @php
     print_r($errors->all());
        @endphp
    </pre>   --}}


    <div class="text-center">
        <h1>Registrtion</h1>
</div>
<form action="{{url("/")}}/register" method="post">
    @csrf
@php
    $demo=1
@endphp


    <div class=" m-5 w-50">
    <x-input type="text" name="name" label="Please enter your name" :demo="$demo"/>
    <x-input type="email" name="email" label="please enter your email"/>
    <x-input type="password" name="password" label="please enter your password"/>
    <x-input type="password" name="password_confirmation" label="Confirmed your password"/>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

</form>
  </body>
</html>