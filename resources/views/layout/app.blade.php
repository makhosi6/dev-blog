<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    @stack('post-meta')
    @stack('page-meta')
    @stack('index')
    @stack('non-index')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="reference.dev" itemprop="name">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="msapplication-TileColor" content="#868181">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta content="#868181" name="theme-color">

<link rel="manifest" href="/manifest.json">
<!-- Add to homescreen for Chrome on Android -->
<meta name="mobile-web-app-capable" content="yes">
<meta name="application-name" content="thereference.dev">
<link rel="icon" sizes="512x512" href="/android-icon-192x192.png">
<!-- Add to homescreen for Safari on iOS -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#868181">
<meta name="apple-mobile-web-app-title" content="thereference.dev">
<link rel="apple-touch-icon" href="/apple-icon-152x152.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--GA-->
    <meta name="google-site-verification" content="9PzfTAkjoevey29gxuWWHvRSlYRK3FqdbNvn_GZSe6Q" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QHPVF1EKZM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-QHPVF1EKZM');
    </script>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <link href="https://thereference.dev/" rel="canonical">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" as="style"
        onload="this.onload=null;this.rel='stylesheet'" />
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preload" href="{{asset('css/animate.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{asset('css/animate.css')}}"></noscript>
    <link rel="preload" href="{{asset('css/owl.carousel.min.css')}}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}"></noscript>
    {{-- <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}"> --}}
    <link rel="preload" href="{{asset('css/owl.theme.default.min.css')}}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}"></noscript>
    <link rel="preload" href="{{asset('css/magnific-popup.css')}}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}"></noscript>
    
        <link rel="preload" href="{{asset('css/open-iconic-bootstrap.min.css')}}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}"></noscript>


    <link rel="preload" href="{{asset('css/aos.css')}}">
    <noscript>
        <link rel="stylesheet" href="{{asset('css/aos.css')}}"></noscript>
    <link rel="preload" href="{{asset('css/ionicons.min.css')}}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}"></noscript>
    <link rel="preload" href="{{asset('css/flaticon.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{asset('css/flaticon.css')}}"></noscript>
    <link rel="preload" href="{{asset('css/icomoon.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{asset('css/icomoon.css')}}"></noscript>


    <style>
        .ftco-footer .ftco-footer-widget ul li,
        .ftco-footer .ftco-footer-widget ul li a {
            min-height: 48px !important;
        }

        .meta>div {
            color: rgb(148 148 148) !important;
        }

        .subheading {
            color: rgb(0 0 0 / 57%) !important;
        }

        .laxy-img {
            background-color: #d2d2d275 !important;
        }
    </style>
</head>

<body>
    <header style="text-align: center;">
        @include('inc.nav')
    </header>
    <main>
        @include('inc.messages')
        @yield('content')
    </main>
    <footer class="footer">
        @include('inc.footer')
    </footer>
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg>
    </div>
    <script>
        window.lazyLoadOptions = {
        };
      </script>
    <script async src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.1/dist/lazyload.min.js"></script>
    <script src="/js/lazyload.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/jquery.stellar.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/aos.js"></script>
    <script src="/js/jquery.animateNumber.min.js"></script>
    <script src="/js/scrollax.min.js"></script>
    <script src="/js/main.js"></script>
    @stack('map-scripts')
    @stack('editor-scripts')
    @stack('json+ld')
   </script>
</body>

</html>