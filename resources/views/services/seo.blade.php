@extends('layouts.app')

@section('title', 'SEO')

@section('content')

@include('partials.page-banner', [
    'title' => 'SEO',
    'breadcrumb' => [
        ['name' => 'Services', 'url' => '/services'],
        ['name' => 'SEO', 'url' => '']
    ]
])

<section class="container py-5">
    <div class="row align-items-center">

        <div class="col-md-6">
            <h2>Search Engine Optimization</h2>
            <p>Improve rankings and drive organic traffic.</p>

            <ul>
                <li>On-page SEO</li>
                <li>Off-page SEO</li>
                <li>Technical SEO</li>
            </ul>
        </div>

        <div class="col-md-6">
            <img src="{{ asset('images/hero.jpg') }}" class="img-fluid rounded">
        </div>

    </div>
</section>

@endsection