@extends('admin.layouts.admin_main')
@section('header-link')
    <link rel="stylesheet" href="{{ asset('assets/bundles/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Movie Record</h4>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                            <a href="{{ route('movie.add') }}" class="btn btn-info"><i
                                                    data-feather="plus"></i>Add Movie</a>
                                            <tr>
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th>Movie Name</th>
                                                <th>Director</th>
                                                <th>Actor</th>
                                                <th>Release Date</th>
                                                <th>Movie Poster</th>
                                                <th>Movie Banner</th>
                                                <th>Movie Duration</th>
                                                <th>Movie Description</th>
                                                <th>Movie Category</th>
                                                <th>Movie Status</th>
                                                <th>Movie Type</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($movie as $key => $record)
                                                <tr>
                                                    <td>
                                                        {{ $key + 1 }}
                                                    </td>
                                                    <td>{{ $record->movie_name }} </td>
                                                    <td>{{ $record->director }} </td>
                                                    <td>{{ $record->actor }} </td>
                                                    <td>{{ $record->release_date }} </td>

                                                    <td><img src="{{ asset($record->movie_poster) }}" alt=""
                                                            height="50px" width="50px"></td>
                                                    <td><img src="{{ asset($record->movie_banner) }}" alt=""
                                                            height="50px" width="50px"></td>
                                                    <td>{{ $record->movie_duration }} </td>
                                                    <td>{{ $record->movie_description }} </td>
                                                    <td>{{ $record->movie_category }} </td>
                                                    <td>
                                                        @if ($record->movie_status == '0')
                                                            <div class="badge badge-success badge-shadow">Active</div>
                                                        @else
                                                            <div class="badge badge-danger badge-shadow">Deactive</div>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($record->new_release == '0')
                                                            <div class="badge badge-success badge-shadow">New Release</div>
                                                        @elseif($record->new_release == '1')
                                                            <div class="badge badge-danger badge-shadow">Old Movie</div>
                                                        @else
                                                            <div class="badge badge-warning badge-shadow">Popular</div>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('movie.edit', $record->id) }}"
                                                            class="btn btn-primary">Edit</a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('movie.delete', $record->id) }}"
                                                            method="post">
                                                            @csrf
                                                            <button class="btn btn-danger" type="submit">Delete</button>
                                                        </form>
                                                    <td>
                                                </tr>
                                            @endforeach
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
@section('footer-script')
    <!-- JS Libraies -->
    <script src="{{ asset('assets/bundles/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/datatables.js') }}"></script>
@endsection
