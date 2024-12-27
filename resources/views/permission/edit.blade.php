@extends('admin.layouts.admin_main')

@section('content')
<div class="main-content">
    <h1>Edit Permission: {{ $permission->name }}</h1>
    <form action="{{ route('permissions.update', $permission) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Permission Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $permission->name }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update Permission</button>
    </form>
</div>
@endsection
