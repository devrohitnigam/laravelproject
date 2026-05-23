@extends('admin.layout')

@section('content')

<h3>Edit User</h3>

<form method="POST" action="{{ route('admin.users.update', $user->id) }}" enctype="multipart/form-data">
    @csrf

    <div class="mb-3 text-center">
        <img src="{{ $user->image ? asset('storage/'.$user->image) : 'https://via.placeholder.com/100' }}"
             width="100" height="100" style="border-radius:50%;">
    </div>

    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="{{ $user->name }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="{{ $user->email }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Role</label>
        <select name="role" class="form-control">
            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="editor" {{ $user->role == 'editor' ? 'selected' : '' }}>Editor</option>
            <option value="subscriber" {{ $user->role == 'subscriber' ? 'selected' : '' }}>Subscriber</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Profile Image</label>
        <input type="file" name="image" class="form-control">
    </div>

    <button class="btn btn-success">Update User</button>

</form>

@endsection