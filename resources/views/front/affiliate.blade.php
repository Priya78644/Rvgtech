@extends('components.main')
@section('content')
   <!-- Header Section -->
<div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 1500px;">
    <img src="{{ asset('assets/img/Af.webp') }}" class="img-fluid custom-img-width shadow-sm mb-4" alt="Project Banner">
    <h5 class="text-primary">Affiliate Offers</h5>
    <h1 class="mb-3">Our Top Affiliate Products</h1>
    <p class="lead">Explore our handpicked selection of products to promote and earn great commissions.</p>
</div>

<!-- Product Grid Section -->
<div class="container-fluid py-5 my-5 bg-light">
    <div class="row g-4">
        <!-- Product 1 -->
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
            <div class="card border-0 rounded-lg shadow-lg">
                <img src="{{ asset('assets/img/affiliate.png') }}" class="card-img-top rounded-top" alt="Product 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Product Name 1</h5>
                    <p class="card-text">Brief description of the product highlighting its features and benefits.</p>
                    <a href="#" class="btn btn-primary btn-lg">View Details</a>
                    <a href="#" class="btn btn-success btn-lg">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
            <div class="card border-0 rounded-lg shadow-lg">
                <img src="{{ asset('assets/img/affiliate.png')}}" class="card-img-top rounded-top" alt="Product 2">
                <div class="card-body text-center">
                    <h5 class="card-title">Product Name 2</h5>
                    <p class="card-text">Brief description of the product highlighting its features and benefits.</p>
                    <a href="#" class="btn btn-primary btn-lg">View Details</a>
                    <a href="#" class="btn btn-success btn-lg">Buy Now</a>
                </div>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
            <div class="card border-0 rounded-lg shadow-lg">
                <img src="{{ asset('assets/img/affiliate.png') }}" class="card-img-top rounded-top" alt="Product 3">
                <div class="card-body text-center">
                    <h5 class="card-title">Product Name 3</h5>
                    <p class="card-text">Brief description of the product highlighting its features and benefits.</p>
                    <a href="#" class="btn btn-primary btn-lg">View Details</a>
                    <a href="#" class="btn btn-success btn-lg">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action Section -->
<div class="text-center mt-5 wow fadeInUp" data-wow-delay=".7s">
    <h2 class="mb-4">Don't Miss Out!</h2>
    <p class="lead mb-4">Take advantage of these exclusive offers while they last.</p>
    <a href="#" class="btn btn-lg btn-primary">Explore More Products</a>
</div>

<!-- Affiliate Products Section -->
<section id="products" class="content-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-4 mb-4">
                <div class="d-flex flex-column align-items-center bg-white shadow-lg rounded-lg p-4">
                    <img src="{{ asset('assets/img/Facts-Google.webp') }}" class="img-fluid rounded mb-3" alt="Product 1">
                    <h3 class="text-center mb-3">Product 1</h3>
                    <p class="text-center mb-4">Promote this amazing product and earn 20% commission on every sale!</p>
                    <a href="#" class="btn btn-primary w-100">Learn More</a>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-md-4 mb-4">
                <div class="d-flex flex-column align-items-center bg-white shadow-lg rounded-lg p-4">
                    <img src="{{ asset('assets/img/hosting image.jpg') }}" class="img-fluid rounded mb-3" alt="Product 2">
                    <h3 class="text-center mb-3">Product 2</h3>
                    <p class="text-center mb-4">Join our program and promote this product to your audience!</p>
                    <a href="#" class="btn btn-primary w-100">Learn More</a>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-md-4 mb-4">
                <div class="d-flex flex-column align-items-center bg-white shadow-lg rounded-lg p-4">
                    <img src="{{ asset('assets/img/affiliate.png') }}" class="img-fluid rounded mb-3" alt="Product 3">
                    <h3 class="text-center mb-3">Product 3</h3>
                    <p class="text-center mb-4">Earn passive income by sharing this product with your network!</p>
                    <a href="#" class="btn btn-primary w-100">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>



        {{-- Poster Start --}}

        <section class="hero-section d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/img/Animate.png') }}" alt="Illustration" class="img-fluid">
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-center text-white text-center">
                        <h1 class="display-4 font-weight-bold">Learn Something New Every Day.</h1>
                        <p class="lead">Complete information in Hindi about Digital India, Technology, Online Business,
                            Making Money, Life Success, Blogging, SEO, and the Internet.</p>
                        <p class="lead">Subscribe to our blog now to get notifications of our new posts.</p>
                        <form class="form-inline justify-content-center">
                            <div class="form-row">
                                <div class="col-auto">
                                    <input type="text" class="form-control mb-2" placeholder="Your Name">
                                </div>
                                <div class="col-auto">
                                    <input type="email" class="form-control mb-2" placeholder="Your Email Address">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-dark mb-2">Subscribe Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        {{-- Poster End --}}
    @endsection
