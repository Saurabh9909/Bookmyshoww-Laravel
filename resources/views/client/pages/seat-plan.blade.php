@extends('client.layouts.client_main')
@section('content')
    <!-- ==========Banner-Section========== -->
    <section class="details-banner hero-area bg_img seat-plan-banner" data-background="{{ asset(session('movie_poster')) }}">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title">
                        @if (session('movie_name'))
                            {{ session('movie_name') }}
                        @endif
                    </h3>
                    <div class="tags">
                        <a href="#0">City Walk</a>
                        <a href="#0">
                            @if (session('movie_duration'))
                                {{ session('movie_duration') }}
                            @endif
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Page-Title========== -->
    <section class="page-title bg-one">
        <div class="container">
            <div class="page-title-area">
                <div class="item md-order-1">
                    <a href="javascript:void" class="custom-button back-button">
                        <i class="flaticon-double-right-arrows-angles"></i>back
                    </a>
                </div>
                {{-- <div class="item date-item">
                <span class="date">MON, SEP 09 2020</span>
                <select class="select-bar">
                    <option value="sc1">09:40</option>
                    <option value="sc2">13:45</option>
                    <option value="sc3">15:45</option>
                    <option value="sc4">19:50</option>
                </select>
            </div> --}}
                <div class="item">
                    <h5 class="title">05:00</h5>
                    <p>Mins Left</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page-Title========== -->

    <div class="seat-plan-section padding-bottom padding-top">
        <div class="container">
            <div class="screen-area">
                <h4 class="screen">screen</h4>
                <div class="screen-thumb">
                    <img src="{{ asset('assets/images/movie/screen-thumb.png') }}" alt="movie">
                </div>
                <h5 class="subtitle">silver plus</h5>
                <div class="screen-wrapper">
                    <ul class="seat-area">
                        <li class="seat-line">
                            <span>G</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        @for ($i = 1; $i <= 4; $i++)
                                            <li class="single-seat">
                                                <img id="seat_g_{{ $i }}"
                                                    src="{{ asset('assets/images/movie/seat01.png') }}" alt="seat">
                                                <span class="sit-num">G{{ $i }}</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        @for ($i = 5; $i <= 10; $i++)
                                            <li class="single-seat">
                                                <img id="seat_g_{{ $i }}"
                                                    src="{{ asset('assets/images/movie/seat01.png') }}" alt="seat">
                                                <span class="sit-num">G{{ $i }}</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        @for ($i = 11; $i <= 14; $i++)
                                            <li class="single-seat">
                                                <img id="seat_g_{{ $i }}"
                                                    src="{{ asset('assets/images/movie/seat01.png') }}" alt="seat">
                                                <span class="sit-num">G{{ $i }}</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </li>
                            </ul>
                            <span>G</span>
                        </li>
                        <li class="seat-line">
                            <span>f</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        @for ($i = 1; $i <= 4; $i++)
                                            <li class="single-seat">
                                                <img id="seat_f_{{ $i }}"
                                                    src="{{ asset('assets/images/movie/seat01.png') }}" alt="seat">
                                                <span class="sit-num">F{{ $i }}</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        @for ($i = 5; $i <= 10; $i++)
                                            <li class="single-seat">
                                                <img id="seat_f_{{ $i }}"
                                                    src="{{ asset('assets/images/movie/seat01.png') }}" alt="seat">
                                                <span class="sit-num">F{{ $i }}</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        @for ($i = 11; $i <= 14; $i++)
                                            <li class="single-seat">
                                                <img id="seat_f_{{ $i }}"
                                                    src="{{ asset('assets/images/movie/seat01.png') }}" alt="seat">
                                                <span class="sit-num">F{{ $i }}</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </li>
                            </ul>
                            <span>f</span>
                        </li>
                    </ul>
                </div>
                <h5 class="subtitle">silver plus</h5>
                <div class="screen-wrapper">
                    <ul class="seat-area">
                        <li class="seat-line">
                            <span>e</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        @for ($i = 1; $i <= 4; $i++)
                                            <li class="single-seat">
                                                <img id="seat_e_{{ $i }}"
                                                    src="{{ asset('assets/images/movie/seat01.png') }}" alt="seat"
                                                    value='E{{ $i }}'>
                                                <span class="sit-num">E{{ $i }}</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        @for ($i = 5; $i <= 10; $i++)
                                            <li class="single-seat">
                                                <img id="seat_e_{{ $i }}"
                                                    src="{{ asset('assets/images/movie/seat01.png') }}" alt="seat"
                                                    value='E{{ $i }}'>
                                                <span class="sit-num">E{{ $i }}</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        @for ($i = 11; $i <= 14; $i++)
                                            <li class="single-seat">
                                                <img id="seat_e_{{ $i }}"
                                                    src="{{ asset('assets/images/movie/seat01.png') }}" alt="seat"
                                                    value='E{{ $i }}'>
                                                <span class="sit-num">E{{ $i }}</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </li>
                            </ul>
                            <span>e</span>
                        </li>
                        <li class="seat-line">
                            <span>d</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        @for ($i = 1; $i <= 4; $i++)
                                            <li class="single-seat">
                                                <img id="seat_d_{{ $i }}"
                                                    src="{{ asset('assets/images/movie/seat01.png') }}" alt="seat"
                                                    value='D{{ $i }}'>
                                                <span class="sit-num">D{{ $i }}</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        @for ($i = 5; $i <= 10; $i++)
                                            <li class="single-seat">
                                                <img id="seat_d_{{ $i }}"
                                                    src="{{ asset('assets/images/movie/seat01.png') }}" alt="seat"
                                                    value='D{{ $i }}'>
                                                <span class="sit-num">D{{ $i }}</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        @for ($i = 11; $i <= 14; $i++)
                                            <li class="single-seat">
                                                <img id="seat_d_{{ $i }}"
                                                    src="{{ asset('assets/images/movie/seat01.png') }}" alt="seat"
                                                    value='D{{ $i }}'>
                                                <span class="sit-num">D{{ $i }}</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </li>
                            </ul>
                            <span>d</span>
                        </li>
                        <li class="seat-line">
                            <span>c</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        @for ($i = 1; $i <= 4; $i++)
                                            <li class="single-seat">
                                                <img id="seat_c_{{ $i }}"
                                                    src="{{ asset('assets/images/movie/seat01.png') }}" alt="seat"
                                                    value='C{{ $i }}'>
                                                <span class="sit-num">C{{ $i }}</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        @for ($i = 5; $i <= 10; $i++)
                                            <li class="single-seat">
                                                <img id="seat_c_{{ $i }}"
                                                    src="{{ asset('assets/images/movie/seat01.png') }}" alt="seat"
                                                    value='C{{ $i }}'>
                                                <span class="sit-num">C{{ $i }}</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        @for ($i = 11; $i <= 14; $i++)
                                            <li class="single-seat">
                                                <img id="seat_c_{{ $i }}"
                                                    src="{{ asset('assets/images/movie/seat01.png') }}" alt="seat"
                                                    value='C{{ $i }}'>
                                                <span class="sit-num">C{{ $i }}</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </li>
                            </ul>
                            <span>c</span>
                        </li>
                        <li class="seat-line">
                            <span>b</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        @for ($i = 1; $i <= 4; $i++)
                                            <li class="single-seat">
                                                <img id="seat_b_{{ $i }}"
                                                    src="{{ asset('assets/images/movie/seat01.png') }}" alt="seat"
                                                    value='B{{ $i }}'>
                                                <span class="sit-num">B{{ $i }}</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        @for ($i = 5; $i <= 10; $i++)
                                            <li class="single-seat">
                                                <img id="seat_b_{{ $i }}"
                                                    src="{{ asset('assets/images/movie/seat01.png') }}" alt="seat"
                                                    value='B{{ $i }}'>
                                                <span class="sit-num">B{{ $i }}</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        @for ($i = 11; $i <= 14; $i++)
                                            <li class="single-seat">
                                                <img id="seat_b_{{ $i }}"
                                                    src="{{ asset('assets/images/movie/seat01.png') }}" alt="seat"
                                                    value='B{{ $i }}'>
                                                <span class="sit-num">B{{ $i }}</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </li>
                            </ul>
                            <span>b</span>
                        </li>
                        <li class="seat-line">
                            <span>a</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        @for ($i = 1; $i <= 4; $i++)
                                            <li class="single-seat">
                                                <img id="seat_a_{{ $i }}"
                                                    src="{{ asset('assets/images/movie/seat01.png') }}" alt="seat"
                                                    value='A{{ $i }}'>
                                                <span class="sit-num">A{{ $i }}</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        @for ($i = 5; $i <= 10; $i++)
                                            <li class="single-seat">
                                                <img id="seat_a_{{ $i }}"
                                                    src="{{ asset('assets/images/movie/seat01.png') }}" alt="seat"
                                                    value='A{{ $i }}'>
                                                <span class="sit-num">A{{ $i }}</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        @for ($i = 11; $i <= 14; $i++)
                                            <li class="single-seat">
                                                <img id="seat_a_{{ $i }}"
                                                    src="{{ asset('assets/images/movie/seat01.png') }}" alt="seat"
                                                    value='A{{ $i }}'>
                                                <span class="sit-num">A{{ $i }}</span>
                                            </li>
                                        @endfor
                                    </ul>
                                </li>
                            </ul>
                            <span>a</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="proceed-book bg_img" data-background="assets/images/banner/Popcorn.jpg">
                <div class="proceed-to-book">
                    <div class="book-item">
                        <span>You have Choosed Seat</span>
                        <h3 class="title" id="selectedSeats">No seat selected</h3>
                    </div>
                    <div class="book-item">
                        <span>total price</span>
                        <h3 class="title">$150</h3>
                    </div>
                    <div class="book-item">
                        <a class="custom-button" id="proceed-button">proceed</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Movie-Section========== -->
@endsection
@section('footer-script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {

            let selectedSeats = [];
            $(".single-seat img").on("click", function() {
                const seatId = $(this).attr("value");
                const currentSrc = $(this).attr("src");
                const setValue = $(this).attr('value');

                // Check the current image source
                if (currentSrc === "{{ asset('assets/images/movie/seat01.png') }}") {
                    // Change to booked image
                    $(this).attr("src", "{{ asset('assets/images/movie/seat01-booked.png') }}");
                    if (!selectedSeats.includes(seatId)) {
                        selectedSeats.push(seatId); // Adding seat id to array
                    }
                } else {
                    // Change back to available seat image
                    $(this).attr("src", "{{ asset('assets/images/movie/seat01.png') }}");
                    selectedSeats = selectedSeats.filter(id => id !== seatId);
                }
                $("#selectedSeats").text(selectedSeats.join(", "));
            });
            $("#proceed-button").on("click", function() {
                $.ajax({
                    url: "{{ route('seatplan.seatnumber') }}", // Update with your route URL
                    type: "POST",
                    data: {
                        seats: selectedSeats,
                        _token: "{{ csrf_token() }}" // Include CSRF token for Laravel
                    }
                });
            });
        });
    </script>
@endsection
