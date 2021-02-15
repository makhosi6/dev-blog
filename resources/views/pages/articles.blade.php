@extends('layout.app')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight"
    style="background-image: url('/images/max247rduzij-qAjJk-un3BI.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 id="lh" class="mb-3 caps bread">{!!$name!!}</h1>
                <p class="breadcrumbs">
                    <span class="mr-2">
                        <a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a>
                    </span>
                    <span>Articles <i class="ion-ios-arrow-forward"></i></span>
                    <span class="caps">{!!$name!!} <i class="ion-ios-arrow-forward"></i></span>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 body-wrapper">
                @if (count($posts)> 0)
                @foreach ($posts as $post)
                <div class="case">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-8 d-flex">
                            <a href="blog-single.html" class="img w-100 mb-3 mb-md-0"
                                style="background-image: url('/images/image_2.jpg');"></a>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-4 d-flex">
                            <div class="text w-100 pl-md-3">
                                <span class="subheading">Application</span>
                                <h2><a href="blog-single.html">Build a website in minutes with Adobe Templates.</a></h2>
                                <ul class="media-social list-unstyled">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-linkedin"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                                <div class="meta">
                                    <p class="mb-0"><a href="#">11/13/2019</a> | <a href="#">12 min read</a></p>
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
            <div class="row mt-5 vw-100">
                <div class="col center-pager">
                    <div class="block-27">
                        {{$posts->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection