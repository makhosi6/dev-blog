@extends('layout.app')
@section('content')
@push('post-meta')
<title>{!!$post->title!!}</title>
<meta name="description" content="{!!$post->title!!}">
<meta name="twitter:title" content={!!$post->title!!}>
<meta name="twitter:description" content={!!$post->{'sub-title'}!!}>
<meta name="twitter:image" content="http://thereference.dev/storage/cover_images/{!!$post->cover_image!!}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="https://thereference.dev/article/{!!$post->slug!!}">
<meta property="og:title" content={!!$post->title!!}>
<meta property="og:description" content={!!$post->{'sub-title'}!!}>
<meta property="og:image" content="http://thereference.dev/storage/cover_images/{{$post->cover_image}}">
<meta property="og:url" content="http://thereference.dev/article/{!!$post->slug!!}">
<meta property="og:type" content="website" />
@endpush
@push('non-index')
<meta name="robots" content="index, follow">
@endpush
<article itemscope itemtype="https://schema.org/Article">
<header class="hero-wrap hero-wrap-2 js-fullheight"
    style="background-image: url('/images/max247rduzij-qAjJk-un3BI.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 id="lh" itemprop="headline" title="{!!$post->title!!}" class="mb-3 bread">{!!$post->title!!}</h1>
                <p itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumbs">
                    <span itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem" class="mr-2">
                        <a itemprop="item" href="/">Home <i class="ion-ios-arrow-forward"></i></a>
                    </span> 
                    <span itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem"  class="mr-2">
                        <a itemprop="item" href="/article/{!!$post->slug!!}" >Article <i class="ion-ios-arrow-forward"></i></a>
                    </span>
                    <span itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem"> 
                        <a itemprop="item" href="/article/{!!$post->slug!!}"> {!!$post->title!!} </a><i class="ion-ios-arrow-forward"></i>
                    </span>
                </p>
            </div>
        </div>
    </div>
</header>
<div class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <p class="mb-5">
                    <img itemprop="image" src="/storage/cover_images/{{$post->cover_image}}" alt="{{$post->title}}" class="img-fluid">
                </p>
                <h2 itemprop="alternativeHeadline" class="mb-3">{!!$post->{'sub-title'}!!}</h2>
                <section itemprop="articleBody" class="body">
                    {!!$post->body!!}
                </section>
                <section itemprop="citation" class="references">
                    {!!$post->references!!}
                </section>
            </div>
            <!-- .col-md-8 -->
            <aside class="col-lg-4 sidebar pl-lg-5 ftco-animate">
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
                        <li class="caps"><a href="/articles/{!!$category->category!!}">{!!$category->category!!} <span
                                    class="ion-ios-arrow-forward"></span></a></li>
                        @endforeach
                    </div>
                </div>
                <div class="sidebar-box ftco-animate">
                    <h3>Recent Blog</h3>
                    @foreach ($articles as $article)
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" role="img" aria-label={!!$article->title!!} style="background-image:
                            url('/storage/cover_images/{{$article->cover_image}}');"></a>
                        <div class="text">
                            <h3 class="heading"><a href="/article/{!!$article->slug!!}">{!!$article->title!!}</a></h3>
                            <div class="meta">
                                <div>
                                    <a class="caps">
                                        <time datetime="{!!$post->created_at!!}">{!!$article->date!!}</time>
                                    </a>
                                </div>
                                <div>
                                    <a class="caps">{!!$article->category!!}</a>
                                </div>
                                {{-- <div><a href="#"></span> 19</a></div> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </aside>
        </div>
    </div>
</div>
</article>
@push('json+ld')
<script type="application/ld+json">
    "@context": "https://schema.org/",
    "@type": "Article",
    "name": "{!!$post->title!!}",
    "image": "{!!$post->cover_image!!}",
    "description": "{!!$post->{'sub-title'}!!}",
    "datePublished": "{!!$post->created_at!!}",
    "dateModified": "{!!$post->updated_at!!}",
    "keywords": ["{!!$post->category!!}"],
    "thumbnailUrl": "{!!$post->cover_image!!}",
    "publisher": {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "url": "http://thereference.dev/",
        "logo": {
            "url": "{{asset('images/grey.png')}}",
            "width": "512",
            "@context": "http://schema.org",
            "@type": "ImageObject"
          },
        "sameAs": [
            "https://twitter.com/floriansimeth",
        ]
    },
    "creator": {
        "@context": "https://schema.org",
        "@type": "Person",
        "email": "mailto:hey@thereference.dev",
        "image": "{{asset('images/makhosi.JPG')}}",
        "jobTitle": "Web Developer",
        "name": "Makhosandile",
        "telephone": "(+27) 81 323 0202",
        "url": "http://www.janedoe.com",
        "sameAs": [
            "https://twitter.com/floriansimeth",

        ]
    }
    "about": {
        "@context": "schema.org",
        "@type": "Guide",
        "about": "{!!$post->category!!}",
        "name": "{!!$post->title!!}",
        "text": "{!!$post->{'sub-title'}!!}",

    }
</script>
@endpush
@endsection