@extends('admin.layouts.admin_main')
@section('content')
<div class="main-content">
    <h1>Permissions</h1>
    <a href="{{ route('permission.create') }}" class="btn btn-primary">Add Permission</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td>
                    <td>
                        <a href="{{ route('permission.edit', $permission) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('permission.destroy', $permission) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
