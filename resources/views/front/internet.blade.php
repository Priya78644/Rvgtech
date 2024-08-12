@extends('components.main')
@section('content')



<div class="container text-center py-5" style="max-width: 900px;">
    <img src="{{asset('assets/img/tech6.webp')}}" alt="" class="mx-auto d-block" style="width: 900px; height: 150px;">
</div>



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