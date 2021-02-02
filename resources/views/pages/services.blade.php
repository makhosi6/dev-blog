@extends('layout.app')
@section('content')
<h1>{{ $title }}</h1>
<ul class="list-group">
    @if (count($services) > 0)
    @foreach ($services as $item)
    <li class="list-group-item">{{$item}}</li>
    @endforeach
</ul>
@endif
@endsection