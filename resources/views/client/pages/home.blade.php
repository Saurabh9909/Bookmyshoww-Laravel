@extends('client.layouts.client_main')
@section('content')
    <section class="w3l-main-slider position-relative" id="home">
        <div class="companies20-content">
            <div class="owl-one owl-carousel owl-theme">
                @foreach ($popular_movie as $item)
                    <div class="item">
                        <li>
                            <div class="slider-info banner-view bg bg2"
                                style="background:url({{ asset($item->movie_poster) }}) no-repeat center">
                                <div class="banner-info">
                                    <h3>Latest Movie Trailers</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<span class="over-para">
                                            Consequuntur hic odio
                                            voluptatem tenetur consequatur.</span></p>
                                    <a href="#small-dialog1" class="popup-with-zoom-anim play-view1">
                                        <span class="video-play-icon">
                                            <span class="fa fa-play"></span>
                                        </span>
                                        <h6>Watch Trailer</h6>
                                    </a>
                                    <div id="small-dialog1" class="zoom-anim-dialog mfp-hide">
                                        <iframe src="https://player.vimeo.com/video/358205676" allow="autoplay; fullscreen"
                                            allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- main-slider -->
    <!--grids-sec1-->
    <section class="w3l-grids">
        <div class="grids-main py-5">
            <div class="container py-lg-3">
                <div class="headerhny-title">
                    <div class="w3l-title-grids">
                        <div class="headerhny-left">
                            <h3 class="hny-title">Popular Movies</h3>
                        </div>
                        <div class="headerhny-right text-lg-right">
                            <h4><a class="show-title" href="movies.html">Show all</a></h4>
                        </div>
                    </div>
                </div>
                <div class="w3l-populohny-grids">
                    @foreach ($movie as $key => $item)
                        <div class="item vhny-grid">
                            <div class="box16">
                                <a href="{{ route('movie.details', $item->id) }}">
                                    <figure>
                                        <img class="img-fluid" src="{{ asset($item->movie_poster) }}" alt="">
                                    </figure>
                                    <div class="box-content">
                                        <h3 class="title">{{ $item->movie_name }}</h3>
                                        <h4> <span class="post"><span class="fa fa-clock-o"> </span>
                                                {{ substr($item->movie_duration, 0, 2) }} Hr
                                                {{ substr($item->movie_duration, 3) }} Min</span>
                                            <span class="post fa fa-heart text-right"></span>
                                        </h4>
                                    </div>
                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--//grids-sec1-->
    <!--grids-sec2-->
    <section class="w3l-grids">
        <div class="grids-main py-5">
            <div class="container py-lg-3">
                <div class="headerhny-title">
                    <div class="w3l-title-grids">
                        <div class="headerhny-left">
                            <h3 class="hny-title">New Releases</h3>
                        </div>
                        <div class="headerhny-right text-lg-right">
                            <h4><a class="show-title" href="movies.html">Show all</a></h4>
                        </div>
                    </div>
                </div>
                <div class="owl-three owl-carousel owl-theme">
                    @foreach ($new_release as $item)
                        <div class="item vhny-grid">
                            <div class="box16 mb-0">
                                <a href="{{ route('movie.details', $item->id) }}">
                                    <figure>
                                        <img class="img-fluid" src="{{ asset($item->movie_poster) }}" alt="">
                                    </figure>
                                    <div class="box-content">
                                        <h4><span class="post"><span class="fa fa-clock-o"> </span>
                                                {{ substr($item->movie_duration, 0, 2) }} Hr
                                                {{ substr($item->movie_duration, 3) }} Min</span>
                                            <span class="post fa fa-heart text-right"></span>
                                        </h4>
                                    </div>
                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                </a>
                            </div>
                            <h3> <a class="title-gd"
                                    href="{{ route('movie.details', $item->id) }}">{{ $item->movie_name }} </a></h3>
                            <p>{{ $item->movie_description }}</p>
                            <div class="button-center text-center mt-4">
                                <a href="{{ route('movie.details', $item->id) }}" class="btn watch-button">Watch now</a>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    <!--grids-sec2-->
    <!--mid-slider -->
    <section class="w3l-mid-slider position-relative">
        <div class="companies20-content">
            <div class="owl-mid owl-carousel owl-theme">
                <div class="item">
                    <li>
                        <div class="slider-info mid-view bg bg2">
                            <div class="container">
                                <div class="mid-info">
                                    <span class="sub-text">Comedy</span>
                                    <h3>Jumanji: The Next Level</h3>
                                    <p>2019 ‧ Comedy/Action ‧ 2h 3m</p>
                                    <a class="watch" href="movies.html"><span class="fa fa-play" aria-hidden="true"></span>
                                        Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info mid-view mid-top1 bg bg2">
                            <div class="container">
                                <div class="mid-info">
                                    <span class="sub-text">Adventure</span>
                                    <h3>Dolittle</h3>
                                    <p>2020 ‧ Family/Adventure ‧ 1h 41m</p>
                                    <a class="watch" href="movies.html"><span class="fa fa-play" aria-hidden="true"></span>
                                        Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info mid-view mid-top2 bg bg2">
                            <div class="container">
                                <div class="mid-info">
                                    <span class="sub-text">Action</span>
                                    <h3>Bad Boys for Life</h3>
                                    <p>2020 ‧ Comedy/Action ‧ 2h 4m</p>
                                    <a class="watch" href="movies.html"><span class="fa fa-play" aria-hidden="true"></span>
                                        Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </section>
@endsection
