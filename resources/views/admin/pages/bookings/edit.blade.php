@extends('admin.layouts.admin_main')
@section('header-link')
    <link rel="stylesheet" href="{{ asset('assets/bundles/jquery-selectric/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/select2/dist/css/select2.min.css') }}">
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Booking</h4>
                            </div>
                            <form action="{{ route('bookings.update', $booking->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <!-- Ticket No -->
                                    <div class="form-group row">
                                        <label for="ticket_no" class="col-sm-3 col-form-label">Ticket No</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="ticket_no" class="form-control" id="ticket_no"
                                                value="{{ $booking->ticket_no }}">
                                        </div>
                                    </div>

                                    <!-- Booking Date -->
                                    <div class="form-group row">
                                        <label for="booking_date" class="col-sm-3 col-form-label">Booking Date</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="booking_date" class="form-control" id="booking_date"
                                                value="{{ $booking->booking_date }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('footer-script')
    <script src="{{ asset('assets/bundles/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('assets/js/page/forms-advanced-forms.js') }}"></script>
@endsection
