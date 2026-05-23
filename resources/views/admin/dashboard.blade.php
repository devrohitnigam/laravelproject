@extends('admin.layout')

@section('content')

<h3>Dashboard</h3>

<div class="row mt-4">

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Total Users</h5>
            <h3>{{ $totalUsers }}</h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Total Blogs</h5>
            <h3>{{ $totalBlogs }}</h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Total Services</h5>
            <h3>{{ $totalServices }}</h3>
        </div>
    </div>

</div>

@endsection