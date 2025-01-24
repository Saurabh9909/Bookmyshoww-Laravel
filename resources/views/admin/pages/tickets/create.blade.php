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
                                <h4>Add Ticket</h4>
                            </div>
                            <form action="{{ route('tickets.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <!-- Show ID -->
                                    <div class="form-group row">
                                        <label for="show_id" class="col-sm-3 col-form-label">Show</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2" name="show_id" id="show_id" required>
                                                @foreach ($shows as $show)
                                                    <option value="{{ $show->id }}">{{ $show->id }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Admin ID -->
                                    <div class="form-group row">
                                        <label for="admin_id" class="col-sm-3 col-form-label">Admin</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2" name="admin_id" id="admin_id" required>
                                                @foreach ($admins as $admin)
                                                    <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Ticket No -->
                                    <div class="form-group row">
                                        <label for="ticket_no" class="col-sm-3 col-form-label">Ticket No</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="ticket_no" class="form-control" id="ticket_no"
                                                placeholder="Ticket No" required>
                                        </div>
                                    </div>

                                    <!-- Show Date -->
                                    <div class="form-group row">
                                        <label for="show_date" class="col-sm-3 col-form-label">Show Date</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="show_date" class="form-control" id="show_date"
                                                required>
                                        </div>
                                    </div>

                                    <!-- Seat No -->
                                    <div class="form-group row">
                                        <label for="seat_no" class="col-sm-3 col-form-label">Seat No</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="seat_no" class="form-control" id="seat_no"
                                                placeholder="Seat No" required>
                                        </div>
                                    </div>

                                    <!-- Price -->
                                    <div class="form-group row">
                                        <label for="price" class="col-sm-3 col-form-label">Price</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="price" class="form-control" id="price"
                                                placeholder="Price" step="0.01" required>
                                        </div>
                                    </div>

                                    <!-- Hall No -->
                                    <div class="form-group row">
                                        <label for="hall_no" class="col-sm-3 col-form-label">Hall No</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="hall_no" class="form-control" id="hall_no"
                                                placeholder="Hall No" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
