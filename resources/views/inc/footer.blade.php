<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="logo"><a href="#">Reference<span>dev</span>.</a></h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-linkedin"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 latest-footer">
                    <h2 class="ftco-heading-2">Latest</h2>
                    @foreach ($articles as $article)
                    <div class="block-21 mb-4 d-flex">
                        <a href="/article/{!!$article->slug!!}" class="img mr-4 rounded" style='background-image: url("/storage/cover_images/{{$article->cover_image}}");'></a>
                        <div class="text">
                            <h3 class="heading"><a href="/article/{!!$article->slug!!}">{!!$article->title!!}</a></h3>
                            <div class="meta">
                                <div>
                                    <a>{!!$article->date!!}</a>
                                </div>
                                <div>
                                    <a class="caps">{!!$article->category!!}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Information</h2>
                    <ul class="list-unstyled">
                        <li><a href="/" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Home</a>
                        </li>
                        {{-- <li><a href="#" class="py-1 d-block"><span
                                    class="ion-ios-arrow-forward mr-3"></span>Articles</a></li> --}}
                        <style>
                            li {
                                display: block;
                                transition-duration: 0.5s;
                            }

                            li:hover {
                                cursor: pointer;
                            }

                            li ul {
                                visibility: hidden;
                                opacity: 0;
                                position: absolute;
                                transition: all 0.5s ease;
                                margin-top: 1rem;
                                left: 0;
                                display: none;
                            }

                           li:hover>ul,
                           li ul:hover {
                                visibility: visible;
                                opacity: 1;
                                display: block;
                            }

                            li ul li {
                                clear: both;
                                width: 100%;
                            }
                        </style>
                        <li class="itm">
                            <a><span
                                class="ion-ios-arrow-forward mr-3"></span>Articles</a>
                                <ul class="dropdown caps">
                                    @foreach ($categories as $category)
                                    <li><a href="/articles/{!!$category->category!!}">{!!$category->category!!}</a></li>
                                    @endforeach
                                </ul>
                        </li>
                        <li><a href="/about" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>About</a>
                        </li>
                        <li><a href="/contact" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View,
                                    San Francisco, California, USA</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929
                                        210</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span
                                        class="text">info@yourdomain.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> | Made with <i class="icon-heart color-danger" aria-hidden="true"></i>
                    by <a class="line" href="https://github.com/makhosi6" target="_blank">Me</a> & <a class="line"
                        href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>