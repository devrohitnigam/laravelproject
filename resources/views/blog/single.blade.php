@extends('layouts.app')

@section('title', ucfirst(str_replace('-', ' ', $slug)))

@section('content')

<!-- PAGE BANNER -->
@include('partials.page-banner', [
    'title' => ucfirst(str_replace('-', ' ', $slug)),
    'breadcrumb' => [
        ['name' => 'Blog', 'url' => '/blog'],
        ['name' => ucfirst(str_replace('-', ' ', $slug)), 'url' => '']
    ]
])

<!-- BLOG CONTENT -->
<section class="container py-5">

    <img src="{{ asset('images/hero.jpg') }}" class="img-fluid mb-4" style="height:300px; object-fit:cover; width:100%;">

    <h2>{{ ucfirst(str_replace('-', ' ', $slug)) }}</h2>

    @if($slug == 'grow-business-online')
        <p>
            Growing your business online requires a strong digital presence, SEO, and social media marketing.
        </p>

    @elseif($slug == 'seo-importance')
        <p>
            SEO helps your website rank higher on Google and drives organic traffic.
        </p>

    @elseif($slug == 'web-design-tips')
        <p>
            A good website design improves user experience and conversions.
        </p>

    @else
        <p>Post not found.</p>
    @endif

</section>

@endsection