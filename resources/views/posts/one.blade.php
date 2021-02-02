@extends('layout.app')
@section('content')
<div>
    <a class="btn btn-default" href="/posts">Back to Posts</a>
    <h3>{{$post->title}}</h3>
    <p>{!!$post->body!!}</p>
    <hr>
    <small>
        <strong>
            Written at {{$post->created_at}}
        </strong>
    </small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
    {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST','class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
    {!!Form::close() !!}
</div>
@endsection