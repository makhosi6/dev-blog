@extends('layout.app')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/max247rduzij-qAjJk-un3BI.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Dashboard</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                 class="ion-ios-arrow-forward"></i></a></span> <span>Dashboard <i class="ion-ios-arrow-forward"></i></span>
                </p>
            </div>
        </div>
    </div>
</section>
<section>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               
                <div class="panel-body">
                 <h2 class="my-4 caps" style="font-size: 40px;font-weight: 700;">Articles for {!!$user->name!!}</h2>
                    <hr>
                    <p>
                        <a href="/admins/create" class="btn-custom mr-6"><span class="ion-ios-create mr-4"></span>CREATE POST</a>
                        <a href="/logout" class="btn-custom mr-6"><span class="ion-ios mr-4"></span>LOGOUT</a>
                    </p>
                    <hr>
                    @if(count($posts) > 0)
                            @foreach($posts as $post)
                            <div class="case">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-xl-8 d-flex">
                                        <a href="/article/{!!$post->slug!!}" class="img w-100 mb-3 mb-md-0"
                                            style="background-image: url('/storage/cover_images/{{$post->cover_image}}');"></a>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4 d-flex">
                                        <div class="text w-100 pl-md-3">
                                            <span class="subheading">{!!$post->category!!}</span>
                                            <h2><a href="/article/{!!$post->slug!!}">{!!$post->title!!}</a></h2>
                                           
                                            <div class="meta">
                                                <p class="mb-0"><a>{!!$post->date!!}</a> | <a>12 min read</a></p>
                                            </div>
                                            <div class="grd-btn m-4">
                                                <span>
                                                    <a href="/admins/{{$post->post_id}}/edit" class="btn-custom"><span
                                                        class="ion-ios-create mr-3"></span>Edit</a>
                                                </span>
                                                <span>
                                                    {!!Form::open(['action' => ['PostController@destroy', $post->post_id], 'method' => 'POST',
                                                    'class' => 'pull-right'])!!}
                                                    {{Form::hidden('_method', 'DELETE')}}
                                                    <span class="ion-ios-trash mr-3"></span>
                                                    {{Form::submit('DELETE', ['class' => 'plain'])}}
                                                    {!!Form::close()!!}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            @endforeach
                    @else
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <div class="text p-4 float-right d-block">
                                <h3 class="heading mb-3 no-articles"><a href="#">No Articles.</a></h3>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
