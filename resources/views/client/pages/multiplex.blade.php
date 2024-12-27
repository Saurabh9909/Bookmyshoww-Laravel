@extends('client.layouts.client_main')
@section('style')
    <style>
        .window-warning {
            display: none;
            /* Initially hidden */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1050;
            background: rgba(0, 0, 0, 0.6);
            /* Dimmed background */
            justify-content: center;
            align-items: center;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .window-warning.active {
            display: flex;
            opacity: 1;
            visibility: visible;
        }

        .window-warning .warning-item {
            background: #fff;
            border-radius: 10px;
            padding: 20px 30px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            max-width: 600px;
            width: 90%;
            position: relative;
        }

        .window-warning .warning-item h6.subtitle {
            font-size: 18px;
            font-weight: bold;
            color: #E50914;
            margin-bottom: 10px;
        }

        .window-warning .warning-item h4.title {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .window-warning .thumb img {
            max-width: 100%;
            margin-bottom: 15px;
            border-radius: 8px;
        }

        .window-warning .movie-details {
            font-size: 16px;
            text-align: left;
            color: #555;
            margin-top: 10px;
        }

        .window-warning .movie-details p {
            margin: 5px 0;
            font-size: 14px;
        }

        .window-warning .custom-button {
            display: inline-block;
            margin-top: 20px;
            background: #E50914;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-transform: uppercase;
            text-decoration: none;
            font-size: 14px;
            transition: background 0.3s;
        }

        .window-warning .custom-button:hover {
            background: #c10711;
            color: #fff;
        }

        .window-warning .lay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: transparent;
            cursor: pointer;
        }


        .movie-schedule .item {
            position: relative;
            display: inline-block;
            padding: 10px 15px;
            margin: 5px;
            background-color: #000;
            color: white;
            border: 1px solid aqua;
            font-size: 14px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .movie-schedule .item:hover {
            background-color: #E50914;
            mask-image: url('{{ asset('assets/images/movie/movie-seat.png') }}');
            -webkit-mask-image: url('{{ asset('assets/images/movie/movie-seat.png') }}');
            mask-size: cover;
            -webkit-mask-size: cover;
            color: yellow;
        }

        .movie-schedule .item:hover::after {
            content: attr(data-time);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 16px;
            font-weight: bold;
            color: white;
        }
    </style>
@endsection
@section('content')
    <!-- ==========Banner-Section========== -->
    <section class="details-banner hero-area bg_img seat-plan-banner" data-background="{{ asset(session('movie_poster')) }}">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title">
                        @if ($movie_details[0])
                            {{ $movie_details[0]->movie_name }}
                        @endif
                    </h3>
                    <div class="tags">
                        <a href="#0">City Walk</a>
                        <a href="#0">
                            @if ($movie_details[0])
                                <h4> <span class="post"><span class="fa fa-clock-o"> </span>
                                        {{ substr($movie_details[0]->movie_duration, 0, 2) }} Hr
                                        {{ substr($movie_details[0]->movie_duration, 3) }} Min</span>
                                </h4>
                            @endif
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->


    <!-- ==========Window-Warning-Section========== -->
    <section class="window-warning inActive">
        <div class="lay"></div>
        <div class="warning-item">
            <h6 class="subtitle">Welcome! </h6>
            <h4 class="title">Select Your Seats</h4>
            <div class="thumb">
                <img src="{{ asset(session('movie_poster')) }}" alt="movie">
            </div>
            <a href="javascript:void" class="custom-button seatPlanButton">Seat Plans<i class=""></i></a>
        </div>
    </section>

    <!-- ==========Movie-Section========== -->
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 mb-5 mb-lg-0">
                <div id="multiplex">
                    @foreach ($multiplex as $item)
                        <ul class="seat-plan-wrapper bg-five" style="background-color: #E50914d2;">
                            <li class="active">
                                <div class="movie-name" style="border:1px solid #fff;">
                                    <div class="icons"><span class="post fa fa-heart text-right"></span></div>
                                    <a href="javascript:void" class="name multiplex_name">{{ $item->multiplex_name }}</a>
                                    <div class="location-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <input type="hidden" id="mulid{{ $item->id }}" value="{{ $item->id }}">
                                    </div>
                                </div>
                                <div class="movie-schedule"
                                    style="color:red; background-color: #000; border:1px solid aqua;">
                                    <div class="item" data-time="09:40" data-multiplex="{{ $item->id }}">
                                        09:40
                                    </div>
                                    <div class="item" data-time="13:45" data-multiplex="{{ $item->id }}">
                                        13:45
                                    </div>
                                    <div class="item" data-time="15:45" data-multiplex="{{ $item->id }}">
                                        15:45
                                    </div>
                                    <div class="item" data-time="19:50" data-multiplex="{{ $item->id }}">
                                        19:50
                                    </div>
                                </div>
                            </li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Movie-Section========== -->
@endsection
@section('footer-script')
    <script src="{{ asset('assets/js/main2.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Add hover event to change mask-image
            $(".movie-schedule .item").hover(
                function() {
                    // On hover
                    $(this).css({
                        "mask-image": "url('{{ asset('assets/images/movie/movie-seat.png') }}')",
                        "-webkit-mask-image": "url('{{ asset('assets/images/movie/movie-seat.png') }}')",
                    });
                },
                function() {
                    // On mouse leave
                    $(this).css({
                        "mask-image": "none",
                        "-webkit-mask-image": "none",
                    });
                }
            );
        });
        $(document).ready(function() {
            $(".movie-schedule .item").on("click", function() {
                const selectedTime = $(this).text().trim();
                const multiplexName = $(this).closest(".seat-plan-wrapper").find(".name").text().trim();
                const movieName = "{{ $movie_details[0]->movie_name ?? '' }}";
                const duration =
                    "{{ substr($movie_details[0]->movie_duration, 0, 2) }} Hr {{ substr($movie_details[0]->movie_duration, 3) }} Min";

                $(".window-warning .title").text(`Select Your Seats for ${movieName}`);
                $(".window-warning .movie-details").html(`
                    <p><strong>Movie:</strong> ${movieName}</p>
                    <p><strong>Multiplex:</strong> ${multiplexName}</p>
                    <p><strong>Time:</strong> ${selectedTime}</p>
                    <p><strong>Duration:</strong> ${duration}</p>
                `);
                $(".window-warning").removeClass("inActive").addClass("active");
            });
            $(".window-warning .lay").on("click", function() {
                $(".window-warning").removeClass("active").addClass("inActive");
            });
        });
        $(document).ready(function() {
            $('.item').on('click', function() {
                const movie_time = $(this).data('time');
                const multiplex_id = $(this).data('multiplex');
                $('.seatPlanButton').on('click', function() {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{ route('movie.seatplan.post', $movie_details[0]->id) }}",
                        type: "POST",
                        data: {
                            movie_time: movie_time,
                            multiplex_id: multiplex_id
                        },
                        success: function(response) {
                            console.log(response);
                            window.location.href = response.redirect_url;
                        },
                        error: function(xhr, status, error) {
                            console.error("Error:", error);
                            alert("An error occurred. Please try again.");
                        }
                    })
                })
            })
        })
    </script>
@endsection
