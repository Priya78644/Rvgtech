@extends('components.main')
@section('content')
 
 
 
 
 <!-- Main Content -->
 <div class="container">
    <div class="row">
        <!-- Main Article Content -->
        <div class="col-md-8">
            <h1 class="my-4">Main Content Area</h1>
            <div class="adsense">
                <!-- Google AdSense Ad 1 -->
                <p>AdSense Ad 1 - 728x90 Banner</p>
            </div>
            <article>
                <h2>Article Title</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
            </article>
            <div class="adsense">
                <!-- Google AdSense Ad 2 -->
                <p>AdSense Ad 2 - 728x90 Banner</p>
            </div>
        </div>

        <!-- Sidebar Widgets -->
        <div class="col-md-4">
            <div class="adsense">
                <!-- Google AdSense Ad 3 -->
                <p>AdSense Ad 3 - 300x250 Rectangle</p>
            </div>
            <div class="card my-4">
                <h5 class="card-header">Search</h5>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <button class="btn btn-secondary" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <div class="card my-4">
                <h5 class="card-header">Categories</h5>
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">JavaScript</a></li>
                    </ul>
                </div>
            </div>
            <div class="card my-4">
                <h5 class="card-header">Side Widget</h5>
                <div class="card-body">
                    You can put anything you like inside these side widgets. They are easy to use and feature Bootstrap's responsive styling.
                </div>
            </div>
            <div class="adsense">
                <!-- Google AdSense Ad 4 -->
                <p>AdSense Ad 4 - 300x250 Rectangle</p>
            </div>
        </div>
    </div>
</div>



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