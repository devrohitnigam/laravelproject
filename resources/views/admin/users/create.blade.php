@extends('admin.layout')

@section('content')

<h3>Add New User</h3>

<form method="POST" action="{{ route('admin.users.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
    </div>

    <div class="mb-3">
        <label>Role</label>
        <select name="role" class="form-control">
            <option value="admin">Admin</option>
            <option value="editor">Editor</option>
            <option value="subscriber">Subscriber</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Profile Image</label>
        <input type="file" name="image" class="form-control">
    </div>

    <button class="btn btn-success">Create User</button>

</form>

@endsection