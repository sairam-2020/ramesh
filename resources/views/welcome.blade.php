<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Styles -->
        <style>
          
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content container pt-3">
            <div class="jumbotron">
  <h1 class="display-4">Hello, Ramesh</h1>
  <p class="lead">I love My Husband</p>
  <hr class="my-4">
  <p>I Love My SOn</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Thank You</a>
  </p>
</div>
            </div>
        </div>
        <ul class="nav">
        <li class="nav-item">
  <a class="nav-link active" href="/home" target="_blank">Home</a>
  <a class="nav-link " href="/contact" target="_blank">Contact</a>
  <a class="nav-link " href="/about" target="_blank">About</a>
  <a class="nav-link " href="/team" target="_blank">Team</a>
  </li>
</ul>
    </body>
</html>
