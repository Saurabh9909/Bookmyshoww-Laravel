@extends('admin.layouts.admin_main')

@section('content')
<div class="main-content">
    <h1>Add Permission</h1>
    <form action="{{ route('permission.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Permission Name</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <button type="submit" class="btn btn-success">Create Permission</button>
    </form>
</div>
@endsection
