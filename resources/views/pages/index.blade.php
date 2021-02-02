@extends('layout.app')
@section('content')
    <div class="jumbotron text-center">
    <h1>This is {{config('app.name', 'Error')}} <==> {{$title}}</h1>
    <p>A Laravel website built from scratch, from the Travesy Media's Youtube Series</p>
    <p class="sep" ><a href="/login" class="btn btn-primary btn-lg">Login</a><a href="/register" class="btn btn-success btn-lg">Register</a></p>
</div>
@endsection