@extends('layouts.app')

@section('title', 'Services')

@section('content')

<!-- PAGE BANNER -->
@include('partials.page-banner', [
    'title' => 'Our Services',
    'breadcrumb' => [
        ['name' => 'Services', 'url' => '']
    ]
])

<!-- INTRO -->
<section class="container py-5 text-center">
    <h2>Our Digital Services</h2>
    <p>
        We provide complete web solutions to help your business grow online.
    </p>
</section>

<!-- SERVICES LIST -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row">

            <!-- SERVICE 1 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100 text-center">
                    <img src="{{ asset('images/hero.jpg') }}" class="card-img-top" style="height:200px; object-fit:cover;">
                    
                    <div class="card-body">
                        <h4>Web Design</h4>
                        <p>Modern, responsive and user-friendly website designs.</p>
                        <a href="/services/web-design" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>

            <!-- SERVICE 2 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100 text-center">
                    <img src="{{ asset('images/hero.jpg') }}" class="card-img-top" style="height:200px; object-fit:cover;">
                    
                    <div class="card-body">
                        <h4>Web Development</h4>
                        <p>Custom web applications built with modern technologies.</p>
                        <a href="/services/web-development" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>

            <!-- SERVICE 3 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100 text-center">
                    <img src="{{ asset('images/hero.jpg') }}" class="card-img-top" style="height:200px; object-fit:cover;">
                    
                    <div class="card-body">
                        <h4>SEO</h4>
                        <p>Improve your rankings and get more traffic from search engines.</p>
                        <a href="/services/seo" class="btn btn-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- WHY CHOOSE OUR SERVICES -->
<section class="container py-5">
    <h2 class="text-center mb-4">Why Choose Our Services</h2>

    <div class="row text-center">

        <div class="col-md-4">
            <i class="bi bi-speedometer2 fs-1 text-primary"></i>
            <h5>Fast Performance</h5>
            <p>Optimized solutions for better speed.</p>
        </div>

        <div class="col-md-4">
            <i class="bi bi-shield-check fs-1 text-primary"></i>
            <h5>Secure</h5>
            <p>We follow best security practices.</p>
        </div>

        <div class="col-md-4">
            <i class="bi bi-graph-up fs-1 text-primary"></i>
            <h5>Growth Focused</h5>
            <p>We build strategies to grow your business.</p>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="bg-primary text-white text-center p-5">
    <h2>Need a Custom Service?</h2>
    <p>Contact us today and get a free consultation</p>
    <a href="/contact" class="btn btn-light">Contact Now</a>
</section>

@endsection