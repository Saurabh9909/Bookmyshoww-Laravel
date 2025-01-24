@extends('client.layouts.client_main')
@section('content')
    <div class="event-facility padding-bottom padding-top">
        <div class="container">
            <form action="{{ route('movie.bookingdetails') }}" method="post">
                @csrf
                <div class="row" id="showticket">
                    <div class="col-lg-8">
                        <div class="checkout-widget d-flex flex-wrap align-items-center justify-cotent-between">
                            <div class="title-area">
                                <h5 class="title">Already A Book My Showw Member?</h5>
                                <p>Sign in to earn points and make booking easier!</p>
                            </div>
                            <a href="{{ route('login') }}" class="sign-in-area">
                                <i class="fas fa-user"></i><span>Sign in</span>
                            </a>
                        </div>
                        <div class="checkout-widget checkout-contact">
                            <h5 class="title">Share your Contact Details </h5>
                            <div class="form-group">
                                <input type="text" value="{{ session('user_name') ?? '' }}" placeholder="Full Name"
                                    name="custname">
                            </div>
                            <div class="form-group">
                                <input type="text" value="{{ session('user_email') ?? '' }}"
                                    placeholder="Enter your Mail" name="custemail">
                            </div>
                            <div class="form-group">
                                <input type="text" value="{{ session('phone_number') ?? '' }}"
                                    placeholder="Enter your Phone Number " name="custmob">
                            </div>
                            <div class="form-group">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="booking-summery bg-one">
                            <h4 class="title">booking summary</h4>
                            <ul>
                                <li>
                                    <h6 class="subtitle"><span>Movie</span>
                                        <span>{{ session('movie_name') }} <input type="hidden"
                                                value="{{ session('movie_name') }}" name="movie_name"></span>
                                    </h6>
                                </li>
                                <li>
                                    <span class="info">Ticket Booking Number:</span>
                                    <input type="text" name="ticketNumber" readonly="readonly"
                                        value="{{ $ticketNumber }}" />
                                    <span class="info" style="color:#fff">*SAVE THIS CODE FOR BOOKING FOOD</span>
                                </li>
                                <li>
                                    <h6 class="subtitle"><span>Multiplex</span>
                                        <span>{{ $multiplex->multiplex_name ?? '' }}</span>
                                        <input type="hidden" value="{{ $multiplex->multiplex_name ?? '' }}"
                                            name="multiplex_name">
                                    </h6>
                                </li>
                                <li>
                                    <h6 class="subtitle"><span>Ticket</span>
                                        <span>
                                            @foreach ($seats as $item)
                                                <input type="hidden" value="{{ $item }}" name="seats[]">
                                                {{ $item }}
                                            @endforeach
                                        </span>
                                    </h6>
                                    <h6 class="subtitle"><span>Total Seat(s)</span>
                                        <span>{{ count($seats) }}
                                            <input type="hidden" value="{{ count($seats) }}" name="totalseat">
                                        </span>
                                    </h6>
                                    <h6 class="subtitle">
                                        <span>Movie Price(₹)</span>
                                        <span> {{ $totalamount }}
                                            <input type="hidden" value="180" name="totalprice">
                                        </span>
                                    </h6>
                                    <div class="info">
                                        <span>{{ session('movie_date') }}
                                            <input type="hidden" value="2024-12-28" name="ticketdate" />
                                            {{ session('movie_time') }}
                                            <input type="hidden" value="{{ session('movie_time') }}" name="tickettime" />
                                        </span> <span>Tickets</span>
                                    </div>
                                </li>
                                <li style="display:none">
                                    <h6 class="subtitle mb-0"></h6>
                                </li>
                            </ul>
                        </div>
                        <div class="proceed-area  text-center">
                            <h6 class="subtitle">
                                <span>Amount Payable</span>
                                <input type="hidden" name="totalamount" value="{{ $totalamount }}">
                                <span>&#8377; {{ $totalamount }}</span>
                            </h6>
                            <input type="submit" value="Continue" class="custom-button" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
