<footer class="bg-dark text-white pt-5 pb-3 mt-5">
    <div class="container">
        <div class="row">

            <!-- About -->
            <div class="col-md-4">
                <h5>{{ config('app.name') }}</h5>
                <p>
                    We help businesses grow online with Web Design, Development & SEO services.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-2">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="/" class="text-white text-decoration-none">Home</a></li>
                    <li><a href="/about" class="text-white text-decoration-none">About</a></li>
                    <li><a href="/services" class="text-white text-decoration-none">Services</a></li>
                    <li><a href="/blog" class="text-white text-decoration-none">Blog</a></li>
                    <li><a href="/contact" class="text-white text-decoration-none">Contact</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="col-md-3">
                <h5>Our Services</h5>
                <ul class="list-unstyled">
                    <li><a href="/services/web-design" class="text-white text-decoration-none">Web Design</a></li>
                    <li><a href="/services/web-development" class="text-white text-decoration-none">Web Development</a></li>
                    <li><a href="/services/seo" class="text-white text-decoration-none">SEO</a></li>
                </ul>
            </div>

            <!-- Contact + Social -->
            <div class="col-md-3">
                <h5>Contact</h5>
                <p><i class="bi bi-envelope"></i> info@mywebsite.com</p>
                <p><i class="bi bi-telephone"></i> +91 9876543210</p>
                <p><i class="bi bi-geo-alt"></i> Noida, India</p>

                <!-- Social Icons -->
                <div class="mt-2">
                    <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

        </div>

        <hr class="bg-white">

        <!-- Bottom -->
        <div class="text-center">
            <p class="mb-0">
                © {{ date('Y') }} {{ config('app.name') }}. All Rights Reserved.
            </p>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>