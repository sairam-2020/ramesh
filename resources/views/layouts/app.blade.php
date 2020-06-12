<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ramesh - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Styles -->
        <style>
          
        </style>
    </head>
    <body >
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contact">Contact Us</a>
      </li>
    </ul>
    <span class="navbar-text">
      Mail us - visaaram@gmail.com
    </span>
  </div>

 
</nav>

           
        <div class="container mt-4">
            @yield('content')
        </div>
        <nav class="container navbar  navbar-light bg-light">
  <a class="navbar-brand" href="#">Reserved ramesh</a>
</nav>
    </body>
</html>
