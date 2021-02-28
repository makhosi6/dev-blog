@extends('layout.app')
@section('content')
@push('index')
<meta name="robots" content="index, follow">
@endpush
@push('page-meta')
<title>Reference.dev | {!!$name!!}</title>
<meta name="description" content="Far far away, behind the word mountains, far from the countries Vokalia and
Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right
at the coast of the Semantics, a large language ocean.">
<meta property="og:title" content="{!!$name!!}">
<meta property="og:description" content="Offering tour packages for individuals or groups.">
<meta property="og:image" content="https://thereference.dev/storage/cover_images/thumbnail.jpg">
<meta property="og:url" content="https://thereference.dev/articles/{!!$name!!}">
<meta property="og:type" content="webpage" />
<meta name="twitter:title" content="{!!$name!!}">
<meta name="twitter:description" content=" Offering tour packages for individuals or groups.">
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
                                    <li class="ftco-animate"><a href="#" rel="nofollow" target="_blank"><span
                                                class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#" rel="nofollow" target="_blank"><span
                                                class="icon-linkedin"></span></a></li>
                                    <li class="ftco-animate"><a href="#" rel="nofollow" target="_blank"><span
                                                class="icon-instagram"></span></a></li>
                                </ul>
                                <div class="meta">
                                    <p class="mb-0"><a><time datetime="{!!$post->created_at!!} "itemprop="datePublished">{!!$post->date!!}
                                            </time></a> | <a>1 min read</a></p>
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
                            <h3 class="heading mb-3 no-articles"><a>No Articles.</a></h3>
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
<<<<<<< HEAD
        "url": "https://thereference.dev/aricles/{!!$name!!}",
=======
        "url": "http://example.com/aricles/{!!$name!!}",
>>>>>>> parent of e24bfc0... Sunday 02/21/2021 00:38 - SEO, Optimization
        "logo": {
            "url": "https://rich-snippets.io/wp-content/uploads/2017/08/cropped-rich-snippets-icon.jpg",
            "width": "512",
            "@context": "http://schema.org",
            "@type": "ImageObject"
          },
        "mainEntityOfPage": "https://example.com",
        "creator": {
            "@context": "https://schema.org",
            "@type": "Person",
            "email": "mailto:jane-doe@xyz.edu",
            "image": "janedoe.jpg",
            "jobTitle": "Professor",
            "name": "Jane Doe",
            "telephone": "(425) 123-4567",
            "url": "http://www.janedoe.com",
            "sameAs": [
                "https://twitter.com/khosii",
            ]
        },
        "description": "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.",
        "license": "",
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
<<<<<<< HEAD
                    "@id": "https://thereference.dev/articles/{!!$post->category!!}"
=======
                    "@id": "/articles/{!!$post->category!!}"
>>>>>>> parent of e24bfc0... Sunday 02/21/2021 00:38 - SEO, Optimization
                },
                "articleSection": "{!!$post->category!!}",
                "headline": "{!!$post->title!!}",
                "datePublished": "{!!$post->created_at!!}",
                "dateModified": "{!!$post->updated_at!!}",
<<<<<<< HEAD
                "image": "https://thereference.dev/storage/cover_images/{{$post->cover_image}}",
                "url": "https://thereference.dev/article/{!!$post->slug!!}",
=======
                "image": "/storage/cover_images/{{$post->cover_image}}",
                "url": "/article/{!!$post->slug!!}",
>>>>>>> parent of e24bfc0... Sunday 02/21/2021 00:38 - SEO, Optimization
                "author": "Makhosandile",
                "publisher": {
                    "@context": "https://schema.org",
                    "@type": "WebSite",
<<<<<<< HEAD
                    "url": "https://thereference.dev/",
=======
                    "url": "http://example.com/",
>>>>>>> parent of e24bfc0... Sunday 02/21/2021 00:38 - SEO, Optimization
                    "sameAs": [
                        "https://twitter.com/khosii",
                    ]
                },
                "creator": {
                    "@context": "https://schema.org",
                    "@type": "Person",
                    "email": "mailto:jane-doe@xyz.edu",
                    "image": "janedoe.jpg",
                    "jobTitle": "Web Developer",
                    "name": "Makhosandile",
                    "telephone": "(425) 123-4567",
                    "url": "http://www.janedoe.com",
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