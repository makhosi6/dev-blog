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
                        <a href="javascript:void(0)"> Create<i class="ion-ios-arrow-forward"></i></a>
                    </span>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container">
    <h3>Create Post</h3>
    {!! Form::open(['action' => 'PostController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <span class="limit">
        Character Limit: 44
    </span>
        <div class="form-group">
            {{Form::label('slug', 'Slug')}}
            {{Form::text('slug', '', ['class' => 'form-control', 'placeholder' => 'Slug'])}}
        </div>
        <div class="form-group">
            {{Form::label('sub-title', 'Sub-title')}}
            {{Form::text('sub-title', '', ['class' => 'form-control', 'placeholder' => 'Sub-title'])}}
        </div>
        <div class="form-group">
            {{Form::label('category', 'Category')}}
            {{Form::text('category', '', ['class' => 'form-control', 'placeholder' => 'Category'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
      
        <div class="form-group">
            {{Form::label('references', 'References')}}
            {{Form::textarea('references', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'References Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        <div class="form-group">
            {{Form::label('publish', 'Publish')}} <br>
           {{ Form::select('publish', array('1' => 'Publish', '0' => 'Draft'), 'P')}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>
    @push('editor-scripts')
        <script src="/js/plugins.js"></script>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('article-ckeditor')
            CKEDITOR.replace('ref-ckeditor')
        </script>
    @endpush
</section>
@endsection