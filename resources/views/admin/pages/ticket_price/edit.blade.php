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
                                <h4>Edit Multiplex</h4>
                            </div>
                            <form action="{{ route('ticketprice.update', $ticket->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="ticket_price" class="col-sm-3 col-form-label">Ticket Price</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="ticket_price" class="form-control"
                                                value="{{ $ticket->ticket_price }}" id="ticket_price"
                                                placeholder="Ticket Price">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="multiplex_name" class="col-sm-3 col-form-label">Multiplex Name</label>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <select class="form-control select2" name="multiplex_name">
                                                    <option></option>
                                                    @foreach ($multiplex as $key => $item)
                                                        @if ($item->multiplex_name == $ticket->multiplex->multiplex_name)
                                                            <option value="{{ $item->id }}" selected>
                                                                {{ $item->multiplex_name }}
                                                            </option>
                                                        @else
                                                            <option value="{{ $item->id }}">
                                                                {{ $item->multiplex_name }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="movie_name" class="col-sm-3 col-form-label">Movie Name</label>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <select class="form-control select2" name="movie_name">
                                                    <option></option>
                                                    @foreach ($movie as $key => $item)
                                                        @if ($item->movie_name == $ticket->movie->movie_name)
                                                            <option value="{{ $item->id }}" selected>
                                                                {{ $item->movie_name }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="movie_date" class="col-sm-3 col-form-label">Movie date</label>
                                        <div class="col-sm-6">
                                            <input type="date" name="movie_date" class="form-control" id="movie_date"
                                                value="{{ $ticket->movie_date }}">
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
@endsection
@section('footer-script')
    <script src="{{ asset('assets/bundles/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('assets/js/page/forms-advanced-forms.js') }}"></script>
@endsection
