@extends('components.main')
@section('content')


<main class="container my-5">
    <!-- Sections Start -->
    <section id="section1" class="mb-4">
        <h2 class="text-center">Introduction</h2>
        <div class="card">
            <img src="{{asset('assets/img/future-edu.jpg')}}" class="card-img-top" alt="Introduction to Education">
            <div class="card-body">
                <p class="card-text text-dark">Education is a fundamental aspect of human development and personal growth...</p>
            </div>
        </div>
    </section>

    <section id="section2" class="mb-4">
        <h2 class="text-center">Benefits of Education</h2>
        <div class="card">
            <img src="{{asset('assets/img/edu.jpg')}}" class="card-img-top" alt="Benefits of Education">
            <div class="card-body">
                <p class="card-text text-dark">Education offers numerous benefits, including improved career prospects...</p>
            </div>
        </div>
    </section>

    <section id="section3" class="mb-4">
        <h2 class="text-center">Impact of Education</h2>
        <div class="card">
            <img src="{{asset('assets/img/education.jpg')}}" class="card-img-top" alt="Impact of Education">
            <div class="card-body">
                <p class="card-text text-dark">The impact of education extends beyond individual growth...</p>
            </div>
        </div>
    </section>

    <section id="section4">
        <h2 class="text-center">Online Education</h2>
        <div class="card">
            <img src="{{asset('assets/img/book.jpg')}}" class="card-img-top" alt="Conclusion on Education">
            <div class="card-body">
                <p class="card-text text-dark">Education remains one of the most powerful tools for creating positive change...</p>
            </div>
        </div>
    </section>
    <!-- Sections End -->
</main>

<!-- Cards Start -->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="{{asset('assets/img/educard1.png')}}" class="card-img-top" alt="Image 1">
                <div class="card-body">
                    <h5 class="card-title">Card 1</h5>
                    <p class="card-text text-dark">Education is a once in a lifetime opportunity...</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="{{asset('assets/img/learn.png')}}" class="card-img-top" alt="Image 2">
                <div class="card-body">
                    <h5 class="card-title">Card 2</h5>
                    <p class="card-text text-dark">Experience is not what happens to you...</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="{{asset('assets/img/book.jpg')}}" class="card-img-top" alt="Image 3">
                <div class="card-body">
                    <h5 class="card-title">Card 3</h5>
                    <p class="card-text text-dark">The content of a book holds the power of education...</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cards End -->




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