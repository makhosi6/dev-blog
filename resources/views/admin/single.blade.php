@extends('layout.app')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/images/max247rduzij-qAjJk-un3BI.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 id="lh" title="{!!$post->title!!}" class="mb-3 bread">{!!$post->title!!}</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Article <i class="ion-ios-arrow-forward"></i></a></span> <span>{!!$post->title!!} <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <p class="mb-5">
                    <img src="/storage/cover_images/{{$post->cover_image}}" alt="{{$post->title}}" class="img-fluid">
                </p>
                <h2 class="mb-3">{!!$post->{'sub-title'}!!}</h2>
                <div>
                    {!!$post->body!!}
                </div>
                <div>
                    {!!$post->reference!!}
                </div>
            </div>
            <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                <div class="sidebar-box">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon icon-search"></span>
                            <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Categories</h3>
                        @foreach ($categories as $category)
                        <li class="caps"><a href="/articles/{!!$category->category!!}">{!!$category->category!!} <span class="ion-ios-arrow-forward"></span></a></li>
                          @endforeach
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Recent Blog</h3>
                    @foreach ($articles as $article)
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url('/storage/cover_images/{{$article->cover_image}}');"></a>
                        <div class="text">
                            <h3 class="heading"><a href="/article/{!!$article->slug!!}">{!!$article->title!!}</a></h3>
                            <div class="meta">
                                <div><a class="caps">{!!$article->date!!}</a></div>
                                <div><a class="caps">{!!$article->category!!}</a></div>
                                {{-- <div><a href="#"></span> 19</a></div> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
         
                </div>

                
            </div>

        </div>
    </div>
</section>
@endsection