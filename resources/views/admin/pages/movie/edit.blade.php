@extends('admin.layouts.admin_main')
@section('header-link')
    <link rel="stylesheet" href="{{ asset('assets/bundles/jquery-selectric/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/select2/dist/css/select2.min.css') }}">
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="row">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Movie</h4>
                            </div>
                            <form action="{{ route('movie.update', $movie->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="movie_name" class="col-sm-3 col-form-label">Movie Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="movie_name" value="{{ $movie->movie_name }}"
                                                class="form-control" id="movie_name" placeholder="Movie Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="director" class="col-sm-3 col-form-label">Director Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="director" value="{{ $movie->director }}"
                                                class="form-control" id="director" placeholder="Director">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="actor" class="col-sm-3 col-form-label">Actor</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="actor" value="{{ $movie->actor }}"
                                                class="form-control" id="actor" placeholder="Actor">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="release_date" class="col-sm-3 col-form-label">Release Date</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="release_date" value="{{ $movie->release_date }}"
                                                class="form-control" id="release_date" placeholder="Release Date">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="movie_duration" class="col-sm-3 col-form-label">Movie Duration</label>
                                        <div class="col-sm-9">
                                            <input type="time" name="movie_duration" value="{{ $movie->movie_duration }}"
                                                class="form-control" id="movie_duration" placeholder="Movie Duration">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="movie_category" class="col-sm-3 col-form-label">Movie Category</label>
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <select class="form-control select2" name="movie_category[]" multiple="">
                                                    @foreach ($movie_category as $key => $item)
                                                        <option value="{{ $item->catgory }}">{{ $item->catgory }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Movie Poster -->
                                    <div class="form-group row">
                                        <label for="movie_poster" class="col-sm-3 col-form-label">Movie Poster</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="movie_poster" class="form-control" id="movie_poster"
                                                accept="image/*" onchange="previewPoster(event)">
                                            <img id="poster_preview" src="{{ asset($movie->movie_poster) }}" height="50px"
                                                width="50px" style="margin-top: 10px;">
                                            <input type="hidden" name="movie_poster" value="{{ $movie->movie_poster }}">
                                        </div>
                                    </div>
                                    <!-- Movie Banner -->
                                    <div class="form-group row">
                                        <label for="movie_banner" class="col-sm-3 col-form-label">Movie Banner</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="movie_banner" class="form-control" id="movie_banner"
                                                accept="image/*" onchange="previewBanner(event)">
                                            <img id="banner_preview" src="{{ asset($movie->movie_banner) }}"
                                                height="50px" width="50px" style="margin-top: 10px;">
                                            <input type="hidden" name="movie_banner"
                                                value="{{ $movie->movie_banner }}">
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
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        function previewBanner(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('banner_preview');
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
