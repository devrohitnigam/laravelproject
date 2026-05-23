@extends('admin.layout')

@section('content')

<h3 class="mb-4">Dashboard</h3>

<div class="row">

    <div class="col-md-4">
        <div class="card p-3">
            <h6>Total Users</h6>
            <h3>{{ $totalUsers }}</h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <h6>Total Blogs</h6>
            <h3>{{ $totalBlogs }}</h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <h6>Total Services</h6>
            <h3>{{ $totalServices }}</h3>
        </div>
    </div>

</div>

<hr>

<h5>Latest Users</h5>
<ul>
    @foreach($latestUsers as $user)
        <li>{{ $user->name }} - {{ $user->email }}</li>
    @endforeach
</ul>

<h5>Latest Blogs</h5>
<ul>
    @foreach($latestBlogs as $blog)
        <li>{{ $blog->title }}</li>
    @endforeach
</ul>

@endsection