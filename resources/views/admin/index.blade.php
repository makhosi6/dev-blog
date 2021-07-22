@extends('layout.app')
@section('content')
@push('non-index')
    <meta name="robots" content="noindex, nofollow">
@endpush
<section>
    <div class="hero-wrap js-fullheight" style="background-image: url('images/max247rduzij-qAjJk-un3BI.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-12 ftco-animate">
                    <h1 class="mb-4 mb-md-0">Let's Code</h1>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="text">
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right
                                    at the coast of the Semantics, a large language ocean.</p>
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
        <div class="row d-flex body-wrapper">
            @if (count($posts)> 0)
            @foreach ($posts as $post)
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a itemprop="image" href="/admins/{!!$post->slug!!}" class="laxy-img block-20" role="img"
                        aria-label="{!!$post->title!!}"
                        data-img="/storage/images/{{$post->cover_image}}"
                        style='background-image: url("/images/loading.gif");'>
                    </a>
                    <div class="text p-4 float-right d-block">
                        <div class="topper d-flex align-items-center">
                            <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                <span class="day">
                                    {{ \Carbon\Carbon::createFromTimestamp(strtotime($post->created_at))->format('d')}}
                                </span>
                            </div>
                            <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                <span class="yr">
                                    {{ \Carbon\Carbon::createFromTimestamp(strtotime($post->created_at))->format('Y')}}
                                </span>
                                <span class="mos">
                                    {{\Carbon\Carbon::createFromTimestamp(strtotime($post->created_at))->format('M')}}
                                </span>
                            </div>
                        </div>
                        <a href="/articles/{!!$post->category!!}">
                            <span class="subheading mt-20">{!!$post->category!!}</span>
                        </a>
                        <h3 class="heading mb-3"><a href="/admins/{!!$post->slug!!}">{!!$post->title!!}</a></h3>
                        <p class="ellipsis" title="{!!$post->{'sub-title'}!!}">{!!$post->{'sub-title'}!!}</p>
                        <p><a href="/admins/{!!$post->slug!!}" class="btn-custom"><span
                                    class="ion-ios-arrow-round-forward mr-3"></span>Read
                                more</a></p>
                        <div class="grd-btn">
                            <span>
                                <a href="/admins/{{$post->post_id}}/edit" class="btn-custom"><span
                                    class="ion-ios-create mr-3"></span>Edit</a>
                            </span>
                            <span>
                                {!!Form::open(['action' => ['PostController@destroy', $post->post_id], 'method' => 'POST',
                                'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                <span class="ion-ios-trash mr-3"></span>
                                {{Form::submit('DELETE', ['class' => 'plain'])}}
                                {!!Form::close()!!}
                            </span>
                        </div>
                    </div>
                </div>
                
            </div>
            @endforeach

            @else
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text p-4 float-right d-block">
                        <h3 class="heading mb-3 no-articles"><a href="javascript:void(0)">No Articles.</a></h3>
                    </div>
                </div>
            </div>
            @endif
        </div>
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
@endsection