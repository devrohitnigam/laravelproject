@extends('layouts.app')

@section('title', 'Web Design')

@section('content')

@include('partials.page-banner', [
    'title' => 'Web Design',
    'breadcrumb' => [
        ['name' => 'Services', 'url' => '/services'],
        ['name' => 'Web Design', 'url' => '']
    ]
])

<section class="container py-5">
    <div class="row align-items-center">

        <div class="col-md-6">
            <h2>Web Design</h2>
            <p>We create modern, responsive and user-friendly designs.</p>

            <ul>
                <li>UI/UX Design</li>
                <li>Responsive Design</li>
                <li>Landing Pages</li>
            </ul>
        </div>

        <div class="col-md-6">
            <img src="{{ asset('images/hero.jpg') }}" class="img-fluid rounded">
        </div>

    </div>
</section>

@endsection