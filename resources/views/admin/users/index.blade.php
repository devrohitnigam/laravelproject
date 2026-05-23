@extends('admin.layout')

@section('content')

<h3 class="mb-4">Users</h3>

{{-- ✅ ADD USER BUTTON (ONLY ONCE) --}}
@if(auth()->user()->role === 'admin')
    <a href="{{ route('admin.users.create') }}" class="btn btn-success mb-3">
        + Add User
    </a>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Profile</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($users as $user)
        <tr>
            <td>
                <img src="{{ $user->image ? asset('storage/'.$user->image) : 'https://via.placeholder.com/50' }}" 
                     width="50" height="50" style="border-radius:50%;">
            </td>

            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>

            <td>
                {{-- ONLY ADMIN CAN CHANGE ROLE --}}
                @if(auth()->user()->role === 'admin')
                    <form method="POST" action="{{ route('admin.users.role', $user->id) }}">
                        @csrf

                        <select name="role" onchange="this.form.submit()" class="form-select">
                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Administrator</option>
                            <option value="editor" {{ $user->role == 'editor' ? 'selected' : '' }}>Editor</option>
                            <option value="subscriber" {{ $user->role == 'subscriber' ? 'selected' : '' }}>Subscriber</option>
                        </select>
                    </form>
                @else
                    {{ ucfirst($user->role) }}
                @endif
            </td>

            <td>

                {{-- EDIT (Admin + Editor) --}}
                @if(in_array(auth()->user()->role, ['admin','editor']))
                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-primary">
                        Edit
                    </a>
                @endif

                {{-- DELETE (ONLY ADMIN) --}}
                @if(auth()->user()->role === 'admin')
                    <form action="{{ route('admin.users.delete', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')

                        <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">
                            Delete
                        </button>
                    </form>
                @endif

            </td>

        </tr>
        @endforeach
    </tbody>
</table>

@endsection