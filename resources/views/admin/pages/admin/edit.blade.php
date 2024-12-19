@extends('admin.layouts.admin_main')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Update Admin</h4>
                            </div>
                            <form action="{{ route('update', $admin->id) }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" value="{{ $admin->name }}"
                                                class="form-control" id="inputEmail3" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" value="{{ $admin->email }}"
                                                class="form-control" id="inputEmail3" placeholder="Email">
                                        </div>
                                    </div>
                                    {{-- <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="password" value="{{ $admin->password }}"
                                                class="form-control" id="inputPassword3" placeholder="Password">
                                        </div>
                                    </div> --}}
                                    {{-- <fieldset class="form-group">
                                        <div class="row">
                                            <div class="col-form-label col-sm-3 pt-0">Status</div>
                                            <div class="col-sm-9">
                                                <div class="form-check">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio3" name="status"
                                                            class="custom-control-input" value="0"
                                                            {{ $admin->status == '0' ? 'checked' : '' }}>
                                                        <label class="custom-control-label"
                                                            for="customRadio3">Active</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="status"
                                                            class="custom-control-input" value="1"
                                                            {{ $admin->status == '1' ? 'checked' : '' }}>
                                                        <label class="custom-control-label"
                                                            for="customRadio2">Deactive</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset> --}}
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
