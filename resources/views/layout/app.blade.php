<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!--Meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta content="reference.dev" itemprop="name">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta content="#868181"  name="theme-color">
        
        @stack('post-meta')
        @stack('page-meta')
        @stack('index')
        @stack('non-index')
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://reference.dev/" rel="canonical">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}"> --}}
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('css/aos.css')}}">
        <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

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
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
            </svg>
        </div>
        
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
    
      
    </body>
</html>