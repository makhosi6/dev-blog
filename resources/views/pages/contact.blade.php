@extends('layout.app')
@section('content')
@push('non-index')
<meta name="robots" content="noindex, nofollow">
@endpush
@push('page-meta')
<title>thereference.dev | Contact</title>
<meta name="description" content="Far far away, behind the word mountains, far from the countries Vokalia and
Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right
at the coast of the Semantics, a large language ocean.">
<meta property="og:title" content="European Travel Destinations">
<meta property="og:description" content="Offering tour packages for individuals or groups.">
<meta property="og:image" content="{{asset('images/grey.png')}}">
<meta property="og:url" content="https://thereference.dev/">
<meta property="og:type" content="website" />
<meta name="twitter:title" content="European Travel Destinations ">
<meta name="twitter:description" content=" Offering tour packages for individuals or groups.">
<meta name="twitter:image" content=" {{asset('images/grey.png')}}">
<meta name="twitter:card" content="summary">
<meta name="twitter:url" content="https://thereference.dev/">
@endpush
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/max247rduzij-qAjJk-un3BI.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Contact</h1>
                <p itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumbs">
                    <span itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem" class="mr-2">
                        <a itemprop="item" href="/">Home <i class="ion-ios-arrow-forward"></i></a>
                    </span> 
                    <span itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem"  class="mr-2">
                        <a itemprop="item" href="/contact">Contact <i class="ion-ios-arrow-forward"></i></a>
                    </span>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h3">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
                <p>
                    <span id="label" >Address:</span>
                    <address>
                         198 West 21th Street, Suite 721 New York NY 10016
                    </address>
                </p>
            </div>
            <div class="col-md-3">
                <p><span id="label" >Phone:</span> <a href="tel://0027813230202">(+27) 81 323 0202</a></p>
            </div>
            <div class="col-md-3">
                <p><span id="label" >Email:</span> <a href="mailto:hey@thereference.dev">hey@thereference.dev</a></p>
            </div>
            <div class="col-md-3">
                <p><span id="label" >Website</span> <a href="/">thereference.dev</a></p>
            </div>
        </div>
        <div class="row block-9 no-gutters">
            <div class="col-lg-6 order-md-last d-flex">
                <form action="#" class="bg-light p-4 p-md-5 contact-form">
                    <div class="form-group">
                        <input type="text"  class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
            <div class="col-lg-6 d-flex">
                {{-- <div id="map" class="bg-white">
                </div> --}}
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52927.72857638981!2d18.652164407983882!3d-33.99296948910669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc51c27729aac1%3A0x55f542e3bb40a677!2sBlue%20Downs%2C%20Cape%20Town!5e0!3m2!1sen!2sza!4v1612409511493!5m2!1sen!2sza" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
    @push('map-scripts')
        <script src="/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="/js/google-map.js"></script>
    @endpush
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
            "url": "http://www.janedoe.com",
            "sameAs": [
                "https://twitter.com/khosii",
                "https://github.com/makhosi6",
            ]
        },
        "description": "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.",
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