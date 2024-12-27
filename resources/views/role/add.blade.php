@extends('admin.layouts.admin_main')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="col-12 col-md-6 col-lg-6">
                    <form action="{{ route('role.store') }}" method="POST">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h4>Add Roles</h4>
                            </div>
                            <div class="card-body">
                                <label for="name" class="col-sm-3 col-form-label">Role Name</label>
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Role Name" required>
                                </div>
                                <label for="permissions" class="col-sm-3 col-form-label">Permissions</label>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <select name="permissions" id="permissions" class="form-control">
                                            <option>Select Permissions</option>
                                            @foreach ($permissions as $permission)
                                                <option value="{{ $permission->id }}">{{ $permission->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Create Role</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
