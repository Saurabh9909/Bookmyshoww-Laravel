@extends('client.layouts.client_main')
@section('content')
    <div class="w3l-ab-grids py-5">
        <div class="container py-lg-4">
            <div class="row ab-grids-sec align-items-center">
                <div class="col-lg-6 ab-right">
                    <img class="img-fluid" src="{{ asset($movie_details->movie_poster) }}" height="200px" width="400px">
                </div>
                <div class="col-lg-6 ab-left pl-lg-4 mt-lg-0 mt-5">
                    <h3 class="hny-title">{{ $movie_details->movie_name }}</h3>
                    {{-- <h4>{{ substr($movie_details->movie_duration, 0, 2) }} Hr {{ substr($movie_details->movie_duration, 3) }}
                        Min</h4> --}}
                    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam id quisquam ipsam
                        molestiae ad eius accusantium? Nulla dolorem perferendis inventore! posuere cubilia Curae;
                        Nunc non risus in justo convallis feugiat.</p>
                    <div class="ready-more mt-4">
                        <a href="{{route('multiplex.select',$movie_details->id)}}" class="btn read-button">Book Tickets <span class="fa fa-angle-double-right ml-2"
                                aria-hidden="true"></span></a>
                    </div>
                </div>
            </div>
            <div class="w3l-counter-stats-info text-center">
                <div class="stats_left">
                    <div class="counter_grid">
                        <div class="icon_info">
                            <p class="counter">65</p>
                            <h4>Movies</h4>

                        </div>
                    </div>
                </div>
                <div class="stats_left">
                    <div class="counter_grid">
                        <div class="icon_info">
                            <p class="counter">165</p>
                            <h4>Shows</h4>

                        </div>
                    </div>
                </div>
                <div class="stats_left">
                    <div class="counter_grid">
                        <div class="icon_info">
                            <p class="counter">463</p>
                            <h4>Staff Members</h4>

                        </div>
                    </div>
                </div>
                <div class="stats_left">
                    <div class="counter_grid">
                        <div class="icon_info">
                            <p class="counter">5063</p>
                            <h4>No. of Users</h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
