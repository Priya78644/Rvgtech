@extends('components.main')
@section('content')
    <!-- Projects Section -->
    <!-- Header Section -->
    <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 1500px;">
        <!-- Increased max-width -->
        <img src="{{ asset('assets/img/Af.webp') }}" class="img-fluid custom-img-width  shadow-sm mb-4" alt="Project Banner">
        <h5 class="text-primary">Affiliate Offers</h5>
        <h1 class="mb-3">Our Top Affiliate Products</h1>
        <p class="lead">Explore our handpicked selection of products to promote and earn great commissions.</p>
    </div>



    <!-- Product Grid Section -->
    <div class="container-fluid py-5 my-5 bg-light">
        <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/img/product1.jpg') }}" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Product Name 1</h5>
                        <p class="card-text">Brief description of the product highlighting its features and benefits.</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                        <a href="#" class="btn btn-outline-success">Buy Now</a>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/img/product2.jpg') }}" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Product Name 2</h5>
                        <p class="card-text">Brief description of the product highlighting its features and benefits.</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                        <a href="#" class="btn btn-outline-success">Buy Now</a>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/img/product3.jpg') }}" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product Name 3</h5>
                        <p class="card-text">Brief description of the product highlighting its features and benefits.</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                        <a href="#" class="btn btn-outline-success">Buy Now</a>
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



        <!-- Image Section -->
        <div class="img my-5 text-center">
            <img src="{{ asset('assets/img/affiliate.png') }}" class="img-fluid rounded shadow-sm"
                alt="Affiliate Marketing Banner">
        </div>


        <!-- Affiliate Products Section -->
        <section id="products" class="content-section py-5 bg-light">
            <div class="container">
                <div class="row">
                    <!-- Product 1 -->
                    <div class="col-md-4">
                        <div class="affiliate-product bg-white shadow-sm rounded p-3 mb-4">
                            <img src="{{ asset('assets/img/Facts-Google.webp') }}" class="img-fluid rounded mb-3"
                                alt="Product 1">
                            <h3 class="text-center">Product 1</h3>
                            <p>Promote this amazing product and earn 20% commission on every sale!</p>
                            <a href="#" class="btn btn-primary w-100">Learn More</a>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="col-md-4">
                        <div class="affiliate-product bg-white shadow-sm rounded p-3 mb-4">
                            <img src="{{ asset('assets/img/hosting image.jpg') }}" class="img-fluid rounded mb-3"
                                alt="Product 2">
                            <h3 class="text-center">Product 2</h3>
                            <p>Join our program and promote this product to your audience!</p>
                            <a href="#" class="btn btn-primary w-100">Learn More</a>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="col-md-4">
                        <div class="affiliate-product bg-white shadow-sm rounded p-3 mb-4">
                            <img src="{{ asset('assets/img/Mobile.jpg') }}" class="img-fluid rounded mb-3" alt="Product 3">
                            <h3 class="text-center">Product 3</h3>
                            <p>Earn passive income by sharing this product with your network!</p>
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
