@extends('layout.app')
@section('content')
<section>
    <div class="hero-wrap js-fullheight" style="background-image: url('images/max247rduzij-qAjJk-un3BI.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-12 ftco-animate">
                    <!-- <h2 class="subheading">Hello! Welcome to</h2> -->
                    <h1 class="mb-4 mb-md-0">Let's Code</h1>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="text">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right
                                    at the coast of the Semantics, a large language ocean.</p>
                                <div class="mouse">
                                    <a href="#" class="mouse-icon">
                                        <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row d-flex body-wrapper">
            @if (count($posts)> 0)
            @foreach ($posts as $post)
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="/admins/{{$post->id}}" class="block-20"
                        style="background-image: url('./images/image_9.jpg');">
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
                        <span class="subheading">Application</span>
                        <h3 class="heading mb-3"><a href="#">All you want to know about industrial laws</a></h3>
                        <p>A small river named Duden flow by their place and supplies it with the necessary regelialia.
                            - {!!$post->id!!}</p>
                        <p><a href="#" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read
                                more</a></p>
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
        <div class="row mt-5">
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