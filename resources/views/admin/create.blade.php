@extends('layout.app')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/max247rduzij-qAjJk-un3BI.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Create</h1>
                <p class="breadcrumbs">
                    <span class="mr-2">
                        <a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a>
                    </span>
                    <span class="mr-2">
                        <a href="#"> Create<i class="ion-ios-arrow-forward"></i></a>
                    </span>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container">
        <a class="btn btn-default" href="/admins">Back to Posts</a>
        <h3>{{$post->title}}</h3>
        <p>{!!$post->body!!}</p>
        <hr>
        <small>
            <strong>
                Written at {{$post->created_at}}
            </strong>
        </small>
        <hr>
        <a href="/admins/{{$post->id}}/edit" class="btn btn-default">Edit</a>
        {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST','class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
        {!!Form::close() !!}
</div>
</section>
@endsection