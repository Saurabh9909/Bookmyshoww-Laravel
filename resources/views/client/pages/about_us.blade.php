@extends('client.layouts.client_main')
@section('content')
    <div class="w3l-ab-grids py-5">
        <div class="container py-lg-4">
            <div class="w3l-counter-stats-info text-center">
                <div class="stats_left">
                    <div class="counter_grid">
                        <div class="icon_info">
                            <p class="counter">{{$movieCount}} </p>
                            <h4>Movies</h4>
                        </div>
                    </div>
                </div>
                {{-- <div class="stats_left">
                    <div class="counter_grid">
                        <div class="icon_info">
                            <p class="counter">165</p>
                            <h4>Shows</h4>
                        </div>
                    </div>
                </div> --}}
                <div class="stats_left">
                    <div class="counter_grid">
                        <div class="icon_info">
                            <p class="counter">{{$theatreCount}}</p>
                            <h4>Theatre</h4>
                        </div>
                    </div>
                </div>
                <div class="stats_left">
                    <div class="counter_grid">
                        <div class="icon_info">
                            <p class="counter">{{$userCount}}</p>
                            <h4>No. of Users</h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
