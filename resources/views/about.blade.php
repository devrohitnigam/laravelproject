@extends('layouts.app')

@section('title', 'About Us')

@section('content')

<!-- PAGE BANNER -->
@include('partials.page-banner', [
    'title' => 'About Us',
    'breadcrumb' => [
        ['name' => 'About', 'url' => '']
    ]
])

<!-- ABOUT SECTION -->
<section class="container py-5">
    <div class="row align-items-center">

        <!-- LEFT CONTENT -->
        <div class="col-md-6">
            <h2>Who We Are</h2>
            <p>
                We are a digital agency helping businesses grow online through modern websites and marketing strategies.
            </p>
            <p>
                Our team specializes in Web Design, Development and SEO to deliver high-quality results.
            </p>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="col-md-6">
            <img src="{{ asset('images/hero.jpg') }}" class="img-fluid rounded">
        </div>

    </div>
</section>

<!-- MISSION & VISION -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row text-center">

            <div class="col-md-6">
                <h3>Our Mission</h3>
                <p>
                    To help businesses succeed online with innovative digital solutions.
                </p>
            </div>

            <div class="col-md-6">
                <h3>Our Vision</h3>
                <p>
                    To become a leading digital agency delivering growth and value.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="container py-5">
    <h2 class="text-center mb-4">Why Choose Us</h2>

    <div class="row text-center">

        <div class="col-md-4">
            <i class="bi bi-lightning-charge fs-1 text-primary"></i>
            <h5>Fast Delivery</h5>
            <p>Quick turnaround time for all projects.</p>
        </div>

        <div class="col-md-4">
            <i class="bi bi-award fs-1 text-primary"></i>
            <h5>Quality Work</h5>
            <p>We deliver high-quality scalable solutions.</p>
        </div>

        <div class="col-md-4">
            <i class="bi bi-people fs-1 text-primary"></i>
            <h5>Expert Team</h5>
            <p>Experienced professionals in web & marketing.</p>
        </div>

    </div>
</section>

<!-- TEAM SECTION -->
<section class="bg-light py-5">
    <div class="container">
        <h2 class="text-center">Our Team</h2>

        <div class="row mt-4 text-center">

            <div class="col-md-4">
                <img src="{{ asset('images/hero.jpg') }}" class="img-fluid rounded-circle mb-2" width="120">
                <h5>Rohit Nigam</h5>
                <p>Founder</p>
            </div>

            <div class="col-md-4">
                <img src="{{ asset('images/hero.jpg') }}" class="img-fluid rounded-circle mb-2" width="120">
                <h5>Team Member</h5>
                <p>Designer</p>
            </div>

            <div class="col-md-4">
                <img src="{{ asset('images/hero.jpg') }}" class="img-fluid rounded-circle mb-2" width="120">
                <h5>Team Member</h5>
                <p>Developer</p>
            </div>

        </div>
    </div>
</section>

@endsection