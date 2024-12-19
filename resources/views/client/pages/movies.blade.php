@extends('client.layouts.client_main')
@section('content')
    <section class="w3l-grids">
        <div class="grids-main py-4">
            <div class="container py-lg-4">
                <div class="headerhny-title">
                    <h3 class="hny-title">Popular Movies</h3>
                </div>
                <div class="owl-four owl-carousel owl-theme">
                    <div class="item vhny-grid">
                        <div class="box16">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{ asset('assets/images/banner1.jpg') }}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">End Game</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

                                        </span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                        <div class="box16 mt-4">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{ asset('assets/images/banner2.jpg') }}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Frozen 2</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

                                        </span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                    <div class="item vhny-grid">
                        <div class="box16">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{ asset('assets/images/banner3.jpg') }}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Doctor Sleep</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

                                        </span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                        <div class="box16 mt-4">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{ asset('assets/images/banner4.jpg') }}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Toy story 4</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

                                        </span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                    <div class="item vhny-grid">
                        <div class="box16">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{ asset('assets/images/banner1.jpg') }}" alt="">

                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Rocketman</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

                                        </span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                        <div class="box16 mt-4">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{ asset('assets/images/banner2.jpg') }}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Frozen 2</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

                                        </span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                            <h4><a class="show-title" href="{{ route('all.movies') }}">Show all</a></h4>
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

    <section class="w3l-albums py-5" id="projects">
        <div class="container py-lg-4">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <!--Horizontal Tab-->
                    <div id="parentHorizontalTab">
                        <ul class="resp-tabs-list hor_1">
                            <li>Recent Movies</li>
                            <li>Popular Movies</li>
                            <li>Trend Movies</li>
                            <div class="clear"></div>
                        </ul>
                        <div class="resp-tabs-container hor_1">
                            <div class="albums-content">
                                <div class="row">
                                    <!--/set1-->
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="movies.html">

                                                    <img src="assets/images/m6.jpg" class="img-fluid" alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="movies.html">Long Shot</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                    </span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="movies.html"><img src="assets/images/m5.jpg" class="img-fluid"
                                                        alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="movies.html">Jumanji</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                    </span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="movies.html"><img src="assets/images/m4.jpg" class="img-fluid"
                                                        alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="movies.html">Little Women</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                    </span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="movies.html"><img src="assets/images/m1.jpg" class="img-fluid"
                                                        alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="movies.html">Rocketman</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                    </span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="movies.html"><img src="assets/images/m2.jpg" class="img-fluid"
                                                        alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="movies.html">Doctor Sleep</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                    </span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="movies.html"><img src="assets/images/m3.jpg" class="img-fluid"
                                                        alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="movies.html">Knives Out</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                    </span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="movies.html"><img src="assets/images/n1.jpg" class="img-fluid"
                                                        alt="author image">
                                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="movies.html">No Time to Die</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                    </span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="movies.html"><img src="assets/images/n2.jpg" class="img-fluid"
                                                        alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="movies.html">Mulan</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                    </span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="movies.html"><img src="assets/images/n3.jpg" class="img-fluid"
                                                        alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="movies.html">Free Guy</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                    </span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="albums-content">
                                <div class="row">
                                    <!--/set1-->
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="movies.html"><img src="assets/images/m1.jpg" class="img-fluid"
                                                        alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="movies.html">Rocketman</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                    </span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="movies.html"><img src="assets/images/m2.jpg" class="img-fluid"
                                                        alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="movies.html">Doctor Sleep</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                    </span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="movies.html"><img src="assets/images/m3.jpg" class="img-fluid"
                                                        alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="movies.html">Knives Out</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                    </span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="movies.html"><img src="assets/images/m7.jpg" class="img-fluid"
                                                        alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="movies.html">Frozen 2</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                    </span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="movies.html"><img src="assets/images/m8.jpg" class="img-fluid"
                                                        alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="movies.html">Toy Story 4</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                    </span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="movies.html"><img src="assets/images/m9.jpg" class="img-fluid"
                                                        alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="movies.html">Joker</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                    </span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="albums-content">
                                <div class="row">
                                    <!--/set3-->
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="movies.html"><img src="assets/images/m7.jpg" class="img-fluid"
                                                        alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="movies.html">Frozen 2</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                    </span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="movies.html"><img src="assets/images/m8.jpg" class="img-fluid"
                                                        alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="movies.html">Toy Story 4</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                    </span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="movies.html"><img src="assets/images/m9.jpg" class="img-fluid"
                                                        alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="movies.html">Joker</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                    </span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <!--/set3-->
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="movies.html"><img src="assets/images/m10.jpg" class="img-fluid"
                                                        alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="movies.html">Alita</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min
                                                    </span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="movies.html"><img src="assets/images/m11.jpg" class="img-fluid"
                                                        alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="movies.html">The Lego</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min
                                                    </span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="movies.html"><img src="assets/images/m12.jpg" class="img-fluid"
                                                        alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="movies.html">The Hustle</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

                                                    </span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer-script')
    <script>
        $(document).ready(function() {
            $('.owl-four').owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                responsiveClass: true,
                autoplay: false,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 2,
                        nav: true
                    },
                    667: {
                        items: 2,
                        nav: true
                    },
                    1000: {
                        items: 2,
                        nav: true
                    }
                }
            })
        })

        $(document).ready(function() {
            $('.owl-two').owlCarousel({
                loop: true,
                margin: 40,
                nav: false,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 2,
                        nav: true
                    },
                    667: {
                        items: 2,
                        margin: 20,
                        nav: true
                    },
                    1000: {
                        items: 3,
                        nav: true
                    }
                }
            })
        })
    </script>
@endsection
