@extends('layout.app')
@section('content')
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row d-flex body-wrapper">
@if (count($posts)> 0)
@foreach ($posts as $post)
<div class="col-md-4 d-flex ftco-animate">
    <div class="blog-entry justify-content-end">
        <a href="/posts/{{$post->id}}" class="block-20" style="background-image: url('images/image_9.jpg');">
        </a>
        <div class="text p-4 float-right d-block">
            <div class="topper d-flex align-items-center">
                <div class="one py-2 pl-3 pr-1 align-self-stretch">
                    <span class="day">00</span>
                </div>
                <div class="two pl-0 pr-3 py-2 align-self-stretch">
                    <span class="yr">2019</span>
                    <span class="mos">October</span>
                </div>
            </div>
            <h3 class="heading mb-3"><a href="#">All you want to know about industrial laws</a></h3>
            <p>A small river named Duden flow by their place and supplies it with the necessary regelialia. {!!$post->body!!}</p>
            <p><a href="#" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
        </div>
    </div>
</div>
@endforeach

@else
<div class="well">
    <p>
        <strong>No Posts</strong>
    </p>
</div>
@endif
</div>
<div>
    {{$posts->links()}}
</div>
<div class="row mt-5">
    <div class="col text-center">
        <div class="block-27">
            <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
            </ul>
        </div>
    </div>
</div>
</div>
</section>
@endsection

