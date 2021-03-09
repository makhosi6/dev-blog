@extends('layout.app')
@section('content')
@push('index')
<meta name="robots" content="index, follow">
@endpush
@push('page-meta')
<title>{!!$name!!} - thereference.dev</title>
<meta name="description" content="On point web development how-tos, references, tutorials, examples and guides. Covering different topics.">
<meta property="og:title" content="{!!$name!!}">
<meta property="og:description" content="On point web development how-tos, references, tutorials, examples and guides. Covering different topics. ">
<meta property="og:image" content="https://thereference.dev/storage/cover_images/thumbnail.jpg">
<meta property="og:url" content="https://thereference.dev/articles/{!!$name!!}">
<meta property="og:type" content="webpage" />
<meta name="twitter:title" content="{!!$name!!}">
<meta name="twitter:description" content=" On point web development how-tos, references, tutorials, examples and guides. Covering different topics. ">
<meta name="twitter:image" content=" https://thereference.dev/thumbnail.jpg">
<meta name="twitter:card" content="summary">
<meta name="twitter:url" content="https://example.com/articles/{!!$name!!}">
@endpush
<section class="hero-wrap hero-wrap-2 js-fullheight"
    style="background-image: url('/images/max247rduzij-qAjJk-un3BI.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 id="lh" class="mb-3 caps bread">{!!$name!!}</h1>
                <p itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumbs">
                    <span itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem" class="mr-2">
                        <a itemprop="item" href="/">Home <i class="ion-ios-arrow-forward"></i></a>
                    </span> 
                    <span itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem"  class="mr-2">
                        <a itemprop="item" href="/articles/{!!$name!!}" >Articles <i class="ion-ios-arrow-forward"></i></a>
                    </span>
                    <span itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem"> 
                        <a itemprop="item" href="/articles/{!!$name!!}"> {!!$name!!} </a><i class="ion-ios-arrow-forward"></i>
                    </span>
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
                <article itemscope itemtype="https://schema.org/Article" class="case">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-8 d-flex">
                            <a href="/article/{!!$post->slug!!}" class="img w-100 mb-3 mb-md-0" role="img"
                                aria-label={!!$post->title!!}
                                itemprop="image"
                                style="background-image: url('/storage/cover_images/{{$post->cover_image}}');"></a>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-4 d-flex">
                            <div class="text w-100 pl-md-3">
                                <span itemprop="category" class="subheading">{!!$post->category!!}</span>
                                <h2 itemprop="headline" ><a href="/article/{!!$post->slug!!}">{!!$post->title!!}</a></h2>
                                <ul class="media-social list-unstyled">
                                    <li class="ftco-animate">
                                        <a href="http://twitter.com/reference_dev" rel="nofollow" target="_blank">
                                            <span class="icon-twitter"></span>
                                        </a>
                                    </li>
                                    <li class="ftco-animate">
                                        <a href="https://github.com/makhosi6" rel="nofollow" target="_blank">
                                            <span class="icon-github"></span>
                                        </a>
                                    </li>
                                    <li class="ftco-animate">
                                        <a href="https://instagram.com/reference_dev" rel="nofollow" target="_blank">
                                            <span class="icon-instagram"></span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="meta">
                                    <p class="mb-0"><a href="#"><time datetime="{!!$post->created_at!!} "itemprop="datePublished">{!!$post->date!!}
                                            </time></a> | <a href="#">1 min read</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
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
@push('json+ld')
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "breadcrumb": "Home > Article > {!!$name!!}",
        "url": "https://thereference.dev/aricles/{!!$name!!}",
        "logo": {
            "url": "{{asset('images/grey.png')}}",
            "width": "512",
            "@context": "http://schema.org",
            "@type": "ImageObject"
          },
        "mainEntityOfPage": "https://thereference.dev",
        "creator": {
            "@context": "https://schema.org",
            "@type": "Person",
            "email": "mailto:hey@thereference.dev",
            "image": "{{asset('images/makhosi.JPG')}}",
            "jobTitle": "Web Developer",
            "name": "Makhosandile",
            "telephone": "(+27) 81 323 0202",
            "url": "http://www.github.com/makhosi6",
            "sameAs": [
                "https://twitter.com/khosii",
                "https://github.com/makhosi6",
            ]
        },
        "description": "On point web development how-tos, references, tutorials, examples and guides. Covering different topics.",
        "license": "https://raw.githubusercontent.com/makhosi6/LICENSE/main/LICENSE",
        "keywords": ["{!!$name!!}"]
    }
</script>
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "ItemList",
        "numberOfItems": "{{count($posts)}}",
        "itemListOrder": "Descending",
        "itemListElement": [
            @foreach($posts as $key => $post)
            {
                "@type": "Article",
                "position": "{!!$key + 1!!}",
                "mainEntityOfPage": {
                    "@type": "WebPage",
                    "@id": "https://thereference.dev/articles/{!!$post->category!!}"
                },
                "articleSection": "{!!$post->category!!}",
                "headline": "{!!$post->title!!}",
                "datePublished": "{!!$post->created_at!!}",
                "dateModified": "{!!$post->updated_at!!}",
                "image": "https://thereference.dev/storage/cover_images/{{$post->cover_image}}",
                "url": "https://thereference.dev/article/{!!$post->slug!!}",
                "author": "Makhosandile",
                "publisher": {
                    "@context": "https://schema.org",
                    "@type": "WebSite",
                    "url": "https://thereference.dev/",
                    "sameAs": [
                        "https://twitter.com/khosii",
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
                    "url": "http://www.github.com/makhosi6",
                    "sameAs": [
                        "https://twitter.com/khosii",
                        "https://github.com/makhosi6",
                    ]
                },
                "about": {
                    "@context": "schema.org",
                    "@type": "Guide",
                    "about": "{!!$post->category!!}",
                    "name": "{!!$post->title!!}",
                    "text": "{!!$post->{'sub-title'}!!}",
                }
            },
            @endforeach
        ]
    }
</script>
@endpush
@endsection