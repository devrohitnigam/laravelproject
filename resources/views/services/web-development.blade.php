@extends('layouts.app')

@section('title', 'Web Development')

@section('content')

@include('partials.page-banner', [
    'title' => 'Web Development',
    'breadcrumb' => [
        ['name' => 'Services', 'url' => '/services'],
        ['name' => 'Web Development', 'url' => '']
    ]
])

<section class="container py-5">
    <div class="row align-items-center">

        <div class="col-md-6">
            <h2>Web Development</h2>
            <p>We build powerful and scalable web applications.</p>

            <ul>
                <li>Custom Development</li>
                <li>Laravel Development</li>
                <li>eCommerce Solutions</li>
            </ul>
        </div>

        <div class="col-md-6">
            <img src="{{ asset('images/hero.jpg') }}" class="img-fluid rounded">
        </div>

    </div>
</section>

@endsection