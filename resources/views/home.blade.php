@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- HERO SECTION -->
<section class="text-center text-white d-flex align-items-center" 
    style="background: url('{{ asset('images/hero.jpg') }}') center/cover no-repeat; height: 400px;">

    <div class="container">
        <h1>Grow Your Business Online 🚀</h1>
        <p>We provide Web Design, Development & SEO Services</p>
        <a href="/contact" class="btn btn-primary mt-3">Get Free Consultation</a>
    </div>
</section>


<!-- ABOUT SECTION -->
<section class="container py-5">
    <div class="row align-items-center">

        <div class="col-md-6">
            <h2>About Us</h2>
            <p>
                We are a digital agency helping businesses grow online with modern websites and marketing strategies.
            </p>
        </div>

        <div class="col-md-6">
            <img src="{{ asset('images/hero.jpg') }}" class="img-fluid rounded">
        </div>

    </div>
</section>


<!-- SERVICES SECTION -->
<section class="bg-light py-5">
    <div class="container">
        <h2 class="text-center">Our Services</h2>

        <div class="row mt-4">

            <div class="col-md-4 text-center">
                <img src="{{ asset('images/hero.jpg') }}" class="img-fluid mb-3" style="height:200px; object-fit:cover;">
                <h4>Web Design</h4>
                <p>Modern and responsive website designs.</p>
                <a href="/services/web-design" class="btn btn-primary btn-sm">Read More</a>
            </div>

            <div class="col-md-4 text-center">
                <img src="{{ asset('images/hero.jpg') }}" class="img-fluid mb-3" style="height:200px; object-fit:cover;">
                <h4>Web Development</h4>
                <p>Custom web applications using latest tech.</p>
                <a href="/services/web-development" class="btn btn-primary btn-sm">Read More</a>
            </div>

            <div class="col-md-4 text-center">
                <img src="{{ asset('images/hero.jpg') }}" class="img-fluid mb-3" style="height:200px; object-fit:cover;">
                <h4>SEO</h4>
                <p>Rank your business on Google.</p>
                <a href="/services/seo" class="btn btn-primary btn-sm">Read More</a>
            </div>

        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="text-center bg-primary text-white p-5">
    <h2>Ready to Grow Your Business?</h2>
    <p>Let’s build something amazing together</p>
    <a href="/contact" class="btn btn-light">Contact Us</a>
</section>


<!-- FAQ SECTION -->
<section class="container py-5">
    <h2>FAQs</h2>

    <div class="accordion" id="faq">

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    What services do you provide?
                </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    We provide Web Design, Development and SEO services.
                </div>
            </div>
        </div>

        <div class="accordion-item mt-2">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">
                    How much does a website cost?
                </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse">
                <div class="accordion-body">
                    It depends on your requirements. Contact us for a quote.
                </div>
            </div>
        </div>

    </div>
</section>


<!-- CONTACT SECTION -->
<section class="bg-light py-5">
    <div class="container">
        <h2>Contact Us</h2>

        <div class="row">
            
            <!-- FORM -->
            <div class="col-md-6">

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
                <h5>Contact Details</h5>

                <p><i class="bi bi-envelope"></i> info@mywebsite.com</p>
                <p><i class="bi bi-telephone"></i> +91 9876543210</p>
                <p><i class="bi bi-geo-alt"></i> Noida, India</p>

                <!-- MAP -->
                <iframe 
                    src="https://www.google.com/maps?q=Noida&output=embed"
                    width="100%" height="200" style="border:0;" allowfullscreen="">
                </iframe>
            </div>

        </div>
    </div>
</section>


@endsection