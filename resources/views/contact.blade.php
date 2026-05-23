@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<!-- PAGE BANNER -->
@include('partials.page-banner', [
    'title' => 'Contact Us',
    'breadcrumb' => [
        ['name' => 'Contact', 'url' => '']
    ]
])

<!-- CONTACT SECTION -->
<section class="container py-5">
    <div class="row">

        <!-- CONTACT FORM -->
        <div class="col-md-6">
            <h3>Send Message</h3>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="/contact">
                @csrf

                <input type="text" name="name" class="form-control mb-3" placeholder="Your Name">

                <input type="email" name="email" class="form-control mb-3" placeholder="Your Email">

                <input type="text" name="phone" class="form-control mb-3" placeholder="Your Phone">

                <textarea name="message" class="form-control mb-3" placeholder="Your Message"></textarea>

                <button class="btn btn-primary">Send Message</button>
            </form>
        </div>

        <!-- CONTACT DETAILS -->
        <div class="col-md-6">
            <h3>Contact Details</h3>

            <p><i class="bi bi-envelope"></i> info@mywebsite.com</p>
            <p><i class="bi bi-telephone"></i> +91 9876543210</p>
            <p><i class="bi bi-geo-alt"></i> Noida, India</p>

            <!-- MAP -->
            <div class="mt-3">
                <iframe 
                    src="https://www.google.com/maps?q=Noida&output=embed"
                    width="100%" height="250" style="border:0;" allowfullscreen="">
                </iframe>
            </div>
        </div>

    </div>
</section>

@endsection