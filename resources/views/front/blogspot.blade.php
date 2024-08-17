@extends('components.main')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 blog-post">
                <img src="{{ asset('assets/img/Supreme-Court.webp') }}" alt="Blog Image 1" class="img-fluid blog-img">
                <h2 class="blog-title">Blog Post Title 1</h2>
                <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis, nunc vel
                    auctor aliquet, justo erat.</p>
            </div>
            <div class="col-md-4 blog-post">
                <img src="{{ asset('assets/img/future-edu.jpg') }}" alt="Blog Image 2" class="img-fluid blog-img">
                <h2 class="blog-title">Blog Post Title 2</h2>
                <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis, nunc vel
                    auctor aliquet, justo erat.</p>
            </div>
            <div class="col-md-4 blog-post">
                <img src="{{ asset('assets/img/Supreme-Court.webp') }}" alt="Blog Image 3" class="img-fluid blog-img">
                <h2 class="blog-title">Blog Post Title 3</h2>
                <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis, nunc vel
                    auctor aliquet, justo erat.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 blog-post">
                <img src="{{ asset('assets/img/life2.jpg') }}" alt="Blog Image 4" class="img-fluid blog-img">
                <h2 class="blog-title">Blog Post Title 4</h2>
                <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis, nunc vel
                    auctor aliquet, justo erat.</p>
            </div>
            <div class="col-md-4 blog-post">
                <img src="{{ asset('assets/img/life1.jpg') }}" alt="Blog Image 5" class="img-fluid blog-img">
                <h2 class="blog-title">Blog Post Title 5</h2>
                <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis, nunc vel
                    auctor aliquet, justo erat.</p>
            </div>
            <div class="col-md-4 blog-post">
                <img src="{{ asset('assets/img/Af.webp') }}" alt="Blog Image 6" class="img-fluid blog-img">
                <h2 class="blog-title">Blog Post Title 6</h2>
                <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis, nunc vel
                    auctor aliquet, justo erat.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 blog-post">
                <img src="{{ asset('assets/img/email-marketing.webp') }}" alt="Blog Image 4" class="img-fluid blog-img">
                <h2 class="blog-title">Blog Post Title 4</h2>
                <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis, nunc vel
                    auctor aliquet, justo erat.</p>
            </div>
            <div class="col-md-4 blog-post">
                <img src="{{ asset('assets/img/edu.jpg') }}" alt="Blog Image 5" class="img-fluid blog-img">
                <h2 class="blog-title">Blog Post Title 5</h2>
                <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis, nunc vel
                    auctor aliquet, justo erat.</p>
            </div>
            <div class="col-md-4 blog-post">
                <img src=" {{ asset('assets/img/Mobile.jpg') }} " alt="Blog Image 6" class="img-fluid blog-img">
                <h2 class="blog-title">Blog Post Title 6</h2>
                <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec venenatis, nunc vel
                    auctor aliquet, justo erat.</p>
            </div>
        </div>
    </div>



    {{-- Poster Start --}}
    <section class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/Animate.png') }}" alt="Illustration" class="img-fluid">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center text-white text-center">
                    <h1 class="display-4 font-weight-bold">Learn Something New Every Day.</h1>
                    <p class="lead">Complete information in Hindi about Digital India, Technology, Online Business, Making
                        Money, Life Success, Blogging, SEO, and the Internet.</p>
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
