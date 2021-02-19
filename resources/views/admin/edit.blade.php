
@extends('layout.app')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/max247rduzij-qAjJk-un3BI.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Edit</h1>
                <p class="breadcrumbs">
                    <span class="mr-2">
                        <a>Home <i class="ion-ios-arrow-forward"></i></a>
                    </span>
                    <span class="mr-2">
                        <a href="#"> Edit<i class="ion-ios-arrow-forward"></i></a>
                    </span>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container">
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostController@update', $post->post_id ], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        <b class="limit">
            Character Limit: <span class="title-output">0</span>/ <span class="title-total">44</span>
        </b>
    </div>
        <div class="form-group">
            {{Form::label('slug', 'Slug')}}
            {{Form::text('slug', $post->slug , ['class' => 'form-control', 'placeholder' => 'Slug'])}}
        </div>
        <div class="form-group">
            {{Form::label('sub-title', 'Sub-title')}}
            {{Form::text('sub-title', $post->{'sub-title'}, ['class' => 'form-control', 'placeholder' => 'Sub-title'])}}
        </div>
        <b class="limit">
            Character Limit: <span class="sub-output">0</span>/ <span class="sub-total">72</span>
        </b>
        <div class="form-group">
            {{Form::label('category', 'Category')}}
            {{Form::text('category', $post->category , ['class' => 'form-control', 'placeholder' => 'Category'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body , ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
      
        <div class="form-group">
            {{Form::label('references', 'References')}}
            {{Form::textarea('references', $post->references , ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'References Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        <div class="form-group">
            {{Form::label('publish', 'Publish')}} <br>
           {{ Form::select('publish', array('1' => 'Publish', '0' => 'Draft'), $post->publish)}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection