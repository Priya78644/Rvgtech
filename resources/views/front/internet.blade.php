@extends('components.main')
@section('content')



<!-- Header Section -->
<header class="internet text-white text-center py-5">
    <div class="container">
        <h1 class="display-4 text-light">Fast & Reliable Internet</h1>
        <p class="lead">Experience the best internet service with unlimited data and 24/7 customer support.</p>
        <a href="#plans" class="btn btn-primary btn-lg">View Plans</a>
    </div>
</header>

<!-- About Us Section -->
<section class="container text-center py-5" style="max-width: 1200px;">
    <h2 class="mt-4">About Our Service</h2>
    <p class="lead">We provide high-speed internet services with a focus on reliability, security, and customer satisfaction. Our mission is to keep you connected with the world at blazing speeds.</p>
</section>

<!-- Features Section -->
<section class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-5">Our Features</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <i class="bi bi-speedometer2 display-4 text-danger"></i>
                        <h5 class="card-title mt-3">High-Speed Internet</h5>
                        <p class="card-text">Enjoy ultra-fast internet speeds for streaming, gaming, and more.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <i class="bi bi-shield-lock-fill display-4 text-danger"></i>
                        <h5 class="card-title mt-3">Secure Connection</h5>
                        <p class="card-text">Our advanced security protocols keep your data safe and secure.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <i class="bi bi-headset display-4 text-danger"></i>
                        <h5 class="card-title mt-3">24/7 Support</h5>
                        <p class="card-text">Our dedicated support team is available anytime to assist you.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Plans Section -->
<section class="py-5" id="plans">
    <div class="container">
        <h2 class="text-center mb-5">Choose Your Plan</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Basic</h3>
                        <h4>$29/month</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li>50 Mbps Speed</li>
                            <li>Unlimited Data</li>
                            <li>Free Router</li>
                            <li>24/7 Support</li>
                        </ul>
                        <a href="#" class="btn btn-primary btn-block">Sign Up</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Standard</h3>
                        <h4>$49/month</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li>100 Mbps Speed</li>
                            <li>Unlimited Data</li>
                            <li>Free Router & Installation</li>
                            <li>24/7 Support</li>
                        </ul>
                        <a href="#" class="btn btn-primary btn-block">Sign Up</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Premium</h3>
                        <h4>$79/month</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li>200 Mbps Speed</li>
                            <li>Unlimited Data</li>
                            <li>Free Router & Installation</li>
                            <li>24/7 Support</li>
                        </ul>
                        <a href="#" class="btn btn-primary btn-block">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-1.png" class="img-fluid w-100" alt="">
                        <div class="blog-info">
                            <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                            <div class="d-flex">
                                <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content text-dark border p-4 ">
                        <h5 class="mb-4">Dolor, sit amet consectetur adipisicing</h5>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip.</p>
                        <a class="btn btn-light rounded-pill py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-2.png" class="img-fluid w-100" alt="">
                        <div class="blog-info">
                            <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                            <div class="d-flex">
                                <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content text-dark border p-4 ">
                        <h5 class="mb-4">Dolor, sit amet consectetur adipisicing</h5>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip.</p>
                        <a class="btn btn-light rounded-pill py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-3.png" class="img-fluid w-100" alt="">
                        <div class="blog-info">
                            <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                            <div class="d-flex">
                                <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content text-dark border p-4 ">
                        <h5 class="mb-4">Dolor, sit amet consectetur adipisicing</h5>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip.</p>
                        <a class="btn btn-light rounded-pill py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-4.png" class="img-fluid w-100" alt="">
                        <div class="blog-info">
                            <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                            <div class="d-flex">
                                <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content text-dark border p-4 ">
                        <h5 class="mb-4">Dolor, sit amet consectetur adipisicing</h5>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip.</p>
                        <a class="btn btn-light rounded-pill py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- End --}}



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