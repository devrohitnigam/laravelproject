@extends('layouts.app')

@section('title', 'Blog')

@section('content')

<!-- PAGE BANNER -->
@include('partials.page-banner', [
    'title' => 'Our Blog',
    'breadcrumb' => [
        ['name' => 'Blog', 'url' => '']
    ]
])

<!-- BLOG LIST -->
<section class="container py-5">
    <div class="row">

        <!-- POST 1 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="{{ asset('images/hero.jpg') }}" class="card-img-top" style="height:200px; object-fit:cover;">
                
                <div class="card-body">
                    <h5>How to Grow Your Business Online</h5>
                    <p>Learn strategies to grow your business using digital marketing.</p>
                    <a href="/blog/grow-business-online" class="btn btn-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>

        <!-- POST 2 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="{{ asset('images/hero.jpg') }}" class="card-img-top" style="height:200px; object-fit:cover;">
                
                <div class="card-body">
                    <h5>Importance of SEO in 2026</h5>
                    <p>SEO helps you rank higher and get organic traffic.</p>
                    <a href="/blog/seo-importance" class="btn btn-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>

        <!-- POST 3 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="{{ asset('images/hero.jpg') }}" class="card-img-top" style="height:200px; object-fit:cover;">
                
                <div class="card-body">
                    <h5>Best Web Design Tips</h5>
                    <p>Create modern and user-friendly websites.</p>
                    <a href="/blog/web-design-tips" class="btn btn-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection