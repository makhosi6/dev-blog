@extends('layout.app')
@section('content')
<section>
    @push('index')
    <meta name="robots" content="index, follow">
    @endpush
    @push('page-meta')
  
    <title>Home - thereference.dev</title>
    <meta name="description"
        content="On point web development how-tos, references, tutorials, examples and guides. Covering different topics." />
    <meta property="og:title" content="thereference.dev">
    <meta property="og:description"
        content="On point web development how-tos, references, tutorials, examples and guides. Covering different topics.">
    <meta property="og:image" content="{{'images/grey.png'}}">
    <meta property="og:url" content="https://thereference.dev/">
    <meta property="og:type" content="website" />
    <meta name="twitter:title" content="thereference.dev">
    <meta name="twitter:description"
        content="On point web development how-tos, references, tutorials, examples and guides. Covering different topics.">
    <meta name="twitter:image" content="{{'images/grey.png'}}">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="https://thereference.dev/">
    @endpush

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
                                <p>
                                    I'm an aspiring web developer. And I just thought why not document my journey, while
                                    helping others get over entomophobia [fear of bugs]. Here I post on-point web
                                    development how-tos, references, tutorials, examples and guides.
                                </p>
                                <div class="mouse">
                                    <a href="#articles" class="mouse-icon">
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
<section id="articles" class="ftco-section bg-light">
    <div class="container">
        <section class="row d-flex body-wrapper">
            @if (count($posts)> 0)
            @foreach ($posts as $post)

            <article itemscope itemtype="https://schema.org/Article" class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a itemprop="image" href="/article/{!!$post->slug!!}" class="block-20" role="img"
                        aria-label="{!!$post->title!!}"
                        style='background-image: url("/storage/cover_images/{{$post->cover_image}}");'>
                    </a>
                    <div class="text p-4 float-right d-block">
                        <time itemprop="datePublished" datetime="{!!$post->created_at!!}"
                            class="topper d-flex align-items-center">
                            <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                <span class="day">
                                    {{\Carbon\Carbon::createFromTimestamp(strtotime($post->created_at))->format('d')}}
                                </span>
                            </div>
                            <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                <span class="yr">
                                    {{ \Carbon\Carbon::createFromTimestamp(strtotime($post->created_at))->format('Y')}}
                                </span>
                                <span class="mos">
                                    {{ \Carbon\Carbon::createFromTimestamp(strtotime($post->created_at))->format('M')}}
                                </span>
                            </div>
                        </time>
                        <a href="/articles/{!!$post->category!!}">
                            <span itemprop="category" class="subheading mt-20">{!!$post->category!!}</span>
                        </a>
                        <h3 itemprop="headline" class="heading mb-3"><a
                                href="/article/{!!$post->slug!!}">{!!$post->title!!}</a></h3>
                        <p itemprop="alternativeHeadline" class="ellipsis" title="{!!$post->{'sub-title'}!!}">
                            {!!$post->{'sub-title'}!!}</p>
                        <p><a itemprop="url" href="/article/{!!$post->slug!!}" class="btn-custom"><span
                                    class="ion-ios-arrow-round-forward mr-3"></span>Read more</a>
                            </p>
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
        </section>
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
@push('json+ld')
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "breadcrumb": "Home",
        "url": "https://thereference.dev/",
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
        "keywords": [
            @foreach($categories as $category)
            "{!!$category->category!!}",
            @endforeach
        ]
    }
</script>
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "ItemList",
        "numberOfItems": "{{count($posts)}}",
        "itemListOrder": "Descending",
        "itemListElement": [
            @foreach($posts as $key => $post) {
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
                "url": "https://thereference.dev/articles/{!!$post->slug!!}",
                "author": "Makhosandile",
                "publisher": {
                    "@context": "https://schema.org",
                    "@type": "WebSite",
                    "url": "https://thereference.dev/",
                    "logo": {
                        "url": "{{asset('images/grey.png')}}",
                        "width": "512",
                        "@context": "http://schema.org",
                        "@type": "ImageObject"
                    },
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
                        "http://www.github.com/makhosi6"
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