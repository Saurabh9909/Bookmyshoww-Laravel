@extends('user.user_main')
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="row ">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                        <div class="card-content">
                                            <h5 class="font-15">Movie Booking Details</h5>
                                            <p class="mb-0"><span class="col-green">Total</span></p>
                                            <h2 class="mb-3 font-18">{{ $movieCount ?? '' }}</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            <img src="{{ asset('assets/img/banner/1.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                        <div class="card-content">
                                            <h5 class="font-15">Total Spend Till Date</h5>
                                            <p class="mb-0"><span class="col-green">Total</span></p>
                                            <h2 class="mb-3 font-18">${{ $totalMoneySpend ?? '' }}</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            <img src="{{ asset('assets/img/banner/4.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Booking Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Movie ID</th>
                                                <th>Movie Time</th>
                                                <th>Booking Date</th>
                                                <th>Ticket Number</th>
                                                <th>Multiplex ID</th>
                                                <th>Seat Number</th>
                                                <th>Total Seat</th>
                                                <th>Total Amount</th>
                                                <th>User ID</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($bookingdetails ?? '')
                                                @foreach ($bookingdetails as $key => $booking)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $booking->movie->movie_name }}</td>
                                                        <td>{{ $booking->movie_time }}</td>
                                                        <td>{{ $booking->booking_date }}</td>
                                                        <td><b>{{ $booking->ticket_no }}</b></td>
                                                        <td>{{ $booking->multiplex->multiplex_name }}</td>
                                                        <td><b>{{ $booking->seat_number }}</b></td>
                                                        <td>{{ $booking->total_seat }}</td>
                                                        <td>{{ $booking->total_amount }}</td>
                                                        <td>{{ $booking->user->name }}</td>
                                                        <td>
                                                            <form action="{{ route('user.record.delete', $booking->id) }}"
                                                                method="POST" style="display:inline;">
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
