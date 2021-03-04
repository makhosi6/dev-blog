@extends('layout.app')
@section('content')
@push('page-meta')
<title>About - thereference.dev</title>
<meta name="description" content="On point web development how-tos, references, tutorial, examples and guides. Covering different topics.">
<meta property="og:title" content="thereference.dev">
<meta property="og:description" content="On point web development how-tos, references, tutorial, examples and guides. Covering different topics.">
<meta property="og:image" content="{{'images/grey.png'}}">
<meta property="og:url" content="https://thereference.dev/">
<meta property="og:type" content="website" />

<meta name="twitter:title" content="thereference.dev">
<meta name="twitter:description" content="On point web development how-tos, references, tutorial, examples and guides.">
<meta name="twitter:image" content="{{'images/grey.png'}}">
<meta name="twitter:card" content="summary">
<meta name="twitter:url" content="https://thereference.dev/">
@endpush
@push('non-index')
<meta name="robots" content="noindex, nofollow">
@endpush
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/max247rduzij-qAjJk-un3BI.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">About</h1>
                <p itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumbs">
                    <span itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem" class="mr-2">
                        <a itemprop="item" href="/">Home <i class="ion-ios-arrow-forward"></i></a>
                    </span> 
                    <span itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem"  class="mr-2">
                        <a itemprop="item" href="/about" >About <i class="ion-ios-arrow-forward"></i></a>
                    </span>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 d-flex">
                <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url('/images/ab455g.jpg');">
                    <a href="https://vimeo.com/45830194" class="icon-embed d-flex justify-content-center align-items-center">
                        <span class="icon-embed"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 pl-md-5 py-md-5">
                <div class="row justify-content-start pt-3 pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">Welcome to</span>
                        <h2 class="mb-4">thereference.dev </h2>
                        {{-- <p>On point web development how-tos, references, tutorial, examples and guides.</p> --}}
                        <div class="tabulation-2 mt-4">
                            <ul class="nav nav-pills nav-fill d-md-flex d-block">
                                <li class="nav-item mb-md-0 mb-2">
                                    <a class="nav-link active py-2" data-toggle="tab" href="#home1">Mission</a>
                                </li>
                                <li class="nav-item px-lg-2 mb-md-0 mb-2">
                                    <a class="nav-link py-2" data-toggle="tab" href="#home2">Vision</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab" href="#home3">Value</a>
                                </li>
                            </ul>
                            <div class="tab-content bg-light rounded mt-2">
                                <div class="tab-pane container p-0 active" id="home1">
                                    <p>I'm an aspiring web developer. And I just thought why not document my journey, while helping others get over entomophobia [fear of bugs]. Here I post on point web development how-tos, references, tutorial, examples and guides. </p>
                                </div>
                                <div class="tab-pane container p-0 fade" id="home2">
                                    <p>I'm an aspiring web developer. And I just thought why not document my journey, while helping others get over entomophobia [fear of bugs]. Here I post on point web development how-tos, references, tutorial, examples and guides. </p>
                                </div>
                                <div class="tab-pane container p-0 fade" id="home3">
                                    <p>I'm an aspiring web developer. And I just thought why not document my journey, while helping others get over entomophobia [fear of bugs]. Here I post on point web development how-tos, references, tutorial, examples and guides. </p>
                                </div>
                            </div>
                        </div>
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
        "breadcrumb": "Home > About",
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
        "description": "On point web development how-tos, references, tutorial, examples and guides. Covering different topics.",
        "license": "https://raw.githubusercontent.com/makhosi6/LICENSE/main/LICENSE",
        "keywords": [
            @foreach($categories as $cat)
            "{!!$cat->category!!}",
            @endforeach
        ]
    }
</script>
@endpush
@endsection
