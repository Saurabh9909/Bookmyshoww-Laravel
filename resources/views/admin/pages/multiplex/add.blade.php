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
                                <h4>Add Multiplex</h4>
                            </div>
                            <form action="{{ route('multiplex.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="multiplex_name" class="col-sm-3 col-form-label">Multiplex Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="multiplex_name" class="form-control"
                                                id="multiplex_name" placeholder="Multiplex Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="location" class="col-sm-3 col-form-label">Movie Category</label>
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <select class="form-control select2" name="location[]">
                                                    @foreach ($location as $key => $item)
                                                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" id="toastr-2" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Script for Image Preview -->
    <script>
        function previewPoster(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('poster_preview');
                $("#poster_preview").css("display", "block");
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        function previewBanner(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('banner_preview');
                $("#banner_preview").css("display", "block");

                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
@section('footer-script')
    <script src="{{ asset('assets/bundles/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('assets/js/page/forms-advanced-forms.js') }}"></script>
@endsection
