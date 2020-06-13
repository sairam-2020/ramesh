<!--- this line extend default layout/master page which inside layouts.app -->
@extends('layouts.app')

@section('title', 'team')


@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Teams</h1>
    <p class="lead">Welcome to our team @if($totalmembers>10)Big Team @endif</p>
  </div>
</div>
@endsection

