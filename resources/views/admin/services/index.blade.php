@extends('admin.layout')

@section('content')

<h3>Services</h3>

@if(auth()->user()->role === 'admin')
<a href="{{ route('admin.services.create') }}" class="btn btn-success mb-3">
    + Add Service
</a>
@endif

<table class="table table-bordered">
    <tr>
        <th>Image</th>
        <th>Title</th>
        <th>Action</th>
    </tr>

    @foreach($services as $service)
    <tr>
        <td>
            <img src="{{ $service->image ? asset('storage/'.$service->image) : 'https://via.placeholder.com/50' }}" width="50">
        </td>

        <td>{{ $service->title }}</td>

        <td>
            @if(in_array(auth()->user()->role, ['admin','editor']))
            <a href="{{ route('admin.services.edit',$service->id) }}" class="btn btn-primary btn-sm">Edit</a>
            @endif

            @if(auth()->user()->role === 'admin')
            <form method="POST" action="{{ route('admin.services.delete',$service->id) }}" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</button>
            </form>
            @endif
        </td>
    </tr>
    @endforeach

</table>

@endsection