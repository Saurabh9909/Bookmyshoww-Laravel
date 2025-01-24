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
                                <h4>Add Show</h4>
                            </div>
                            <form action="{{ route('shows.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <!-- Show Start Time -->
                                    <div class="form-group row">
                                        <label for="show_start_time" class="col-sm-3 col-form-label">Show Start Time</label>
                                        <div class="col-sm-9">
                                            <input type="time" name="show_start_time" class="form-control" id="show_start_time" placeholder="Show Start Time">
                                        </div>
                                    </div>

                                    <!-- Show End Time -->
                                    <div class="form-group row">
                                        <label for="show_end_time" class="col-sm-3 col-form-label">Show End Time</label>
                                        <div class="col-sm-9">
                                            <input type="time" name="show_end_time" class="form-control" id="show_end_time" placeholder="Show End Time">
                                        </div>
                                    </div>

                                    <!-- Language (Checkboxes) -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Language</label>
                                        <div class="col-sm-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="language[]" value="English" id="english">
                                                <label class="form-check-label" for="english">English</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="language[]" value="Hindi" id="hindi">
                                                <label class="form-check-label" for="hindi">Hindi</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="language[]" value="Marathi" id="marathi">
                                                <label class="form-check-label" for="marathi">Marathi</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="language[]" value="Gujarati" id="gujarati">
                                                <label class="form-check-label" for="gujarati">Gujarati</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Show Type (Radio Buttons) -->
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Show Type</label>
                                        <div class="col-sm-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="show_type" value="2d" id="2d" checked>
                                                <label class="form-check-label" for="2d">2D</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="show_type" value="3d" id="3d">
                                                <label class="form-check-label" for="3d">3D</label>
                                            </div>
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