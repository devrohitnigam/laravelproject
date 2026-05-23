<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/hero.jpg') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- External CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<!-- TOP BAR -->
<div class="bg-dark text-white py-2">
    <div class="container d-flex justify-content-between">

        <!-- Left: Contact -->
        <div>
            <small>
                <i class="bi bi-telephone"></i> +91 9876543210
                &nbsp; | &nbsp;
                <i class="bi bi-envelope"></i> info@mywebsite.com
            </small>
        </div>

        <!-- Right: Social -->
        <div>
            <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-white me-2"><i class="bi bi-instagram"></i></a>
            <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
        </div>

    </div>
</div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand fw-bold" href="/">
            <img src="{{ asset('images/hero.jpg') }}" height="40">
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">About</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('services*') ? 'active' : '' }}" data-bs-toggle="dropdown" href="/services">
                        Services
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/services/web-design">Web Design</a></li>
                        <li><a class="dropdown-item" href="/services/web-development">Web Development</a></li>
                        <li><a class="dropdown-item" href="/services/seo">SEO</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('blog') ? 'active' : '' }}" href="/blog">Blog</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
                </li>

                <!-- CTA Button -->
                <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                    <a href="/contact" class="btn btn-primary">Free Audit</a>
                </li>

            </ul>

        </div>
    </div>
</nav>