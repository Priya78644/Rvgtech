@extends('components.main')
@section('content')


<div class="container-fluid project py-5 my-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <img src="{{asset('assets/img/bollywood.jpg')}}" class="img-fluid w-100 rounded" alt="">
            <h5 class="text-primary">Our Project</h5>
            <h1>Our Recently Completed Projects</h1>
        </div>
        <div class="row g-5">
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                <div class="project-item">
                    <div class="project-img">
                        <img src="{{asset('assets/img/bollywood.jpg')}}" class="img-fluid w-100 rounded" alt="">
                        <div class="project-content">
                            <a href="#" class="text-center">
                                <h4 class="text-secondary">Web design</h4>
                                <p class="m-0 text-white">Web Analysis</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>






<!-- Image Section -->
<div class="img">
    <img src="{{asset('assets/img/affiliate.png')}}" class="img-fluid" alt="">
</div>

<!-- Content Section -->
<section id="products" class="content-section">
    <div class="container">
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-4">
                <div class="affiliate-product">
                    <img src="{{asset('assets/img/Facts-Google.webp')}}" class="img-fluid" alt="Product 1">
                    <h3>Product 1</h3>
                    <p>Promote this amazing product and earn 20% commission on every sale!</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-md-4">
                <div class="affiliate-product">
                    <img src="{{asset('assets/img/hosting image.jpg')}}" class="img-fluid" alt="Product 2">
                    <h3>Product 2</h3>
                    <p>Join our program and promote this product to your audience!</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-md-4">
                <div class="affiliate-product">
                    <img src="{{asset('assets/img/Mobile.jpg')}}" class="img-fluid" alt="Product 3">
                    <h3>Product 3</h3>
                    <p>Earn passive income by sharing this product with your network!</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
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
                <img src="{{asset('assets/img/Animate.png')}}" alt="Illustration" class="img-fluid">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center text-white text-center">
                <h1 class="display-4 font-weight-bold">Learn Something New Every Day.</h1>
                <p class="lead">Complete information in Hindi about Digital India, Technology, Online Business, Making Money, Life Success, Blogging, SEO, and the Internet.</p>
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
