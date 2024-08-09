@extends('components.main')
@section('content')
{{-- Trending Topic Start --}}
<div class="container-fluid topics mb-5">
    <div class="container py-5">
        <h2 class="mb-4 text-center">Trending Topics</h2>
        <div class="row">
            <!-- Topic 1 -->
            <div class="col-md-4 mb-4">
                <a href="{{route('detail')}}" class="text-decoration-none">
                    <div class="card border-light">
                        <img src="{{ asset('assets/img/modi.jpg') }}" class="card-img-top img-fluid rounded-square"
                            alt="Pm Modi Image" style="max-width: 100%; height: auto;">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Pm Modi</h5>
                            <h6 class="card-subtitle mb-2 text-muted">3 days ago</h6>
                            <p class="card-text text-primary">Safeguarding Minorities Top Priority, Says India As Attack On
                                Hindu Temples Rise In Bangladesh.</p>
                            <p class="card-text"><small>Author Name</small></p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Topic 2 -->
            <div class="col-md-4 mb-4">
                <a href="{{route('detail')}}" class="text-decoration-none">
                    <div class="card border-light">
                        <img src="{{ asset('assets/img/bollywood.jpg') }}" class="card-img-top img-fluid rounded-square"
                            alt="Bollywood Image" style="max-width: 100%; height: auto;">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Bollywood</h5>
                            <h6 class="card-subtitle mb-2 text-muted">5 days ago</h6>
                            <p class="card-text text-primary">This is a brief description of another news article. It
                                highlights the main aspects of the news.</p>
                            <p class="card-text"><small>Author Name</small></p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Topic 3 -->
            <div class="col-md-4">
                <a href="{{route('detail')}}" class="text-decoration-none">
                    <div class="card border-light">
                        <img src="{{ asset('assets/img/cricket.jpg') }}" class="card-img-top img-fluid rounded-square"
                            alt="Cricket Image" style="max-width: 100%; height: auto;">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Cricket</h5>
                            <h6 class="card-subtitle mb-2 text-muted">1 week ago</h6>
                            <p class="card-text text-primary">A summary of this news article goes here. It gives an overview
                                of the important details.</p>
                            <p class="card-text"><small>Author Name</small></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

    {{-- Trending Topics End --}}




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
    
    

    {{--  Mid PAge  News  Section Start  --}}
    <div class="container-fluid py-5">
        <div class="container py-4">
            <div class="row g-4">

                <!-- Sidebar Section Start -->
                <div class="col-lg-3 position-sticky sidebar">
                    <div class="p-4 pt-0 shadow bg-body rounded">
                        <div class="row g-0"> 
                            <div class="col-12 mt-4">
                                <div class="row g-0 align-items-center mb-3">
                                    <div class="col-10">
                                        <div class="features-content d-flex flex-column  p-2 rounded">
                                            <a href="{{route('detail')}}" class="h6 text-dark">PSL 2025 To Clash With IPL As PCB Reveals
                                                Tentative Dates Amid Pakistan’s Scheduling Issues</a>
                                            <small class="text-muted"><i class="fa fa-clock"></i> Aug 05, 2024 08:14 PM IST</small>
                                            <small class="text-muted"><i class="fa fa-eye"></i> 3.5k Views</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row g-0 align-items-center mb-3">
                                    <div class="col-10">
                                        <div class="features-content d-flex flex-column  p-2 rounded">
                                            <a href="{{route('detail')}}" class="h6 text-dark">Bangladesh Unrest: IndiGo And Air India Halt
                                                Flights To Dhaka</a>
                                            <small class="text-muted"><i class="fa fa-clock"></i> Aug 05, 2024 07:29 PM IST</small>
                                            <small class="text-muted"><i class="fa fa-eye"></i> 3.5k Views</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row g-0 align-items-center mb-3">
                                    <div class="col-10">
                                        <div class="features-content d-flex flex-column  p-2 rounded">
                                            <a href="{{route('detail')}}" class="h6 text-dark">Supreme Court Slams Delhi Coaching Centers as
                                                ‘Death Traps,’ Demands Safety Measures</a>
                                            <small class="text-muted"><i class="fa fa-clock"></i> Aug 05, 2024 01:11 PM</small>
                                            <small class="text-muted"><i class="fa fa-eye"></i> 3.5k Views</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row g-0 align-items-center mb-3">
                                    <div class="col-10">
                                        <div class="features-content d-flex flex-column  p-2 rounded">
                                            <a href="{{route('detail')}}" class="h6 text-dark">Next-Gen Maruti Dzire: Launching Soon With 30
                                                km/l Mileage And Cutting-Edge Safety Technologies.</a>
                                            <small class="text-muted"><i class="fa fa-clock"></i> Aug 05, 2024 06:30 PM</small>
                                            <small class="text-muted"><i class="fa fa-eye"></i> 3.5k Views</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar Section End -->


                <!-- Main Post Section Start -->
                <div class="col-lg-6 main-content">
                    <div class="position-relative overflow-hidden rounded">
                        <img src="{{ asset('assets/img/supreme-court.webp') }}" class="img-fluid rounded img-zoomin w-100"
                            alt="">
                        <div class="d-flex justify-content-center px-4 position-absolute flex-wrap"
                            style="bottom: 10px; left: 0;">
                            <a href="{{route('detail')}}" class="text-white me-3 link-hover"><i class="fa fa-clock"></i> 06 minute
                                read</a>
                            <a href="{{route('detail')}}" class="text-white me-3 link-hover"><i class="fa fa-eye"></i> 3.5k Views</a>
                            <a href="{{route('detail')}}" class="text-white me-3 link-hover"><i class="fa fa-comment-dots"></i> 05
                                Comment</a>
                            <a href="#" class="text-white link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                        </div>
                    </div>
                    <div class="border-bottom py-2">
                        <a href="{{route('detail')}}" class="display-7 text-dark mb-0 link-hover">Supreme Court Slams Delhi Coaching
                            Centers as ‘Death Traps,’ Demands Safety Measures</a>
                    </div>
                    <p class="mt-3 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                        a galley standard dummy text ever since the 1500s, when an unknown printer took a galley...</p>
                    <div class="bg-light p-4 rounded">
                        <div class="news-2">
                            <h3 class="mb-4">Top Story</h3>
                        </div>
                        <div class="row g-4 align-items-center">
                            <div class="col-md-6">
                                <div class="rounded overflow-hidden">
                                    <img src="{{ asset('assets/img/news-2.jpg') }}"
                                        class="img-fluid rounded img-zoomin w-100" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex flex-column">
                                    <a href="{{route('detail')}}" class="h3">Stoneman Clandestine Ukrainian claims successes
                                        against Russian.</a>
                                    <p class="mb-0 fs-5"><i class="fa fa-clock"></i> 06 minute read</p>
                                    <p class="mb-0 fs-5"><i class="fa fa-eye"></i> 3.5k Views</p>
                                </div>
                            </div>
                        </div>
                    </div>

                  
                </div>
 <!-- Main Post Section End -->

        <!-- Right  Sidebar Section Start -->
                <div class="col-lg-3 position-sticky sidebar">
                    <div class="shadow  bg-body rounded p-4 pt-0">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="rounded overflow-hidden">
                                    <img src="{{ asset('assets/img/news-1.jpg') }}"
                                        class="img-fluid rounded img-zoomin w-100" alt="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex flex-column">
                                    <a href="{{route('detail')}}" class="h4 mb-2">Get the best speak market, news.</a>
                                    <p class="fs-5 mb-0"><i class="fa fa-clock"></i> 06 minute read</p>
                                    <p class="fs-5 mb-0"><i class="fa fa-eye"></i> 3.5k Views</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row g-4 align-items-center">
                                    <div class="col-5">
                                        <div class="overflow-hidden rounded">
                                            <img src="{{ asset('assets/img/news-2.jpg') }}"
                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="features-content d-flex flex-column">
                                            <a href="{{route('detail')}}" class="h6">Get the best speak market, news.</a>
                                            <small><i class="fa fa-clock"></i> 06 minute read</small>
                                            <small><i class="fa fa-eye"></i> 3.5k Views</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Additional Articles -->
                            <div class="col-12">
                                <div class="row g-4 align-items-center">
                                    <div class="col-5">
                                        <div class="overflow-hidden rounded">
                                            <img src="{{ asset('assets/img/news-3.jpg') }}"
                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="features-content d-flex flex-column">
                                            <a href="{{route('detail')}}" class="h6">Get the best speak market, news.</a>
                                            <small><i class="fa fa-clock"></i> 06 minute read</small>
                                            <small><i class="fa fa-eye"></i> 3.5k Views</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row g-4 align-items-center">
                                    <div class="col-5">
                                        <div class="overflow-hidden rounded">
                                            <img src="{{ asset('assets/img/news-4.jpg') }}"
                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="features-content d-flex flex-column">
                                            <a href="{{route('detail')}}" class="h6">Get the best speak market, news.</a>
                                            <small><i class="fa fa-clock"></i> 06 minute read</small>
                                            <small><i class="fa fa-eye"></i> 3.5k Views</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="row g-4 align-items-center">
                                    <div class="col-5">
                                        <div class="overflow-hidden rounded">
                                            <img src="{{ asset('assets/img/news-6.jpg') }}"
                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="features-content d-flex flex-column">
                                            <a href="{{route('detail')}}" class="h6">Get the best speak market, news.</a>
                                            <small><i class="fa fa-clock"></i> 06 minute read</small>
                                            <small><i class="fa fa-eye"></i> 3.5k Views</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Additional Articles End -->
                        </div>
                    </div>
                </div>
                <!-- Right Sidebar Section End -->
            </div>
        </div>
    </div>
    {{-- Right Sidebar End --}}
                {{-- Mid Pge News Section End --}}


    {{-- Best Places Start --}}
    
<div class="container-fluid topics mb-5">
        <h1 class="text-bold text-center">Trending Post</h1>
        <div class="container py-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <a href="{{route('detail')}}" class="trending">
                        <div class="card h-100 hover-effect">
                            <img class="card-img-top" src="{{asset('assets/img/Mobile.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-danger">Trending Best Mobile Phones in India</h5>
                                <p class="card-text text-dark">
                                    Discover the best mobile phones in India, offering cutting-edge features, stunning cameras, and powerful performance....
                                    <a href="{{route('detail')}}" class="text-danger float-right">Read More</a>
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{route('detail')}}" class="trending">
                        <div class="card h-100 hover-effect">
                            <img class="card-img-top" src="{{asset('assets/img/Facts-Google.webp')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-danger">Google turns 25 today! Here are 25 fun facts about the iconic search engine</h5>
                                <p class="card-text text-dark">
                                    Google's full form is Global Organisation of Oriented Group Language of Earth. It was founded in 1998 by Larry Page and Sergey Brin, two Stanford University students....
                                    <a href="{{route('detail')}}" class="text-danger float-right">Read More</a>
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{route('detail')}}" class="trending">
                        <div class="card h-100 hover-effect">
                            <img class="card-img-top" src="{{asset('assets/img/places.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-danger">Places to visit in Uttar Pradesh</h5>
                                <p class="card-text text-dark">
                                    Rich culture, stunning moments, significant history and lip-smacking cuisine awaits you at Meerut. This historical city located in the state of Uttar Pradesh....
                                    <a href="{{route('detail')}}" class="text-danger float-right">Read More</a>
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    

    {{-- Best Places End  --}}
    
  {{-- Deals Start --}}

    <div class="container-fluid topics mb-5">
    <h1 class="text-bold text-center">Best-Deals</h1>
    <div class="container py-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <a href="#" class="trending">
                    <div class="card h-100 card-hover">
                        <img class="card-img-top" src="{{asset('assets/img/hosting image.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Free Website Hosting Solutions</h5>
                            <p class="card-text text-dark">How to choose fast, high-quality, well-supported and recommended WordPress hosting for any site ?.........
                                <a href="your-link-here" class="text-danger float-right">Read More</a>
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="trending">
                    <div class="card h-100 card-hover">
                        <img class="card-img-top" src="{{asset('assets/img/startup.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Business Startup</h5>
                            <p class="card-text text-dark">Discover the 9 essential steps on how to start a startup that succeeds. Learn how to develop a business plan, attract investors, develop a marketing plan ........
                                <a href="" class="text-danger float-right">Read More</a>
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="trending">
                    <div class="card h-100 card-hover">
                        <img class="card-img-top" src="{{asset('assets/img/website.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Blogging</h5>
                            <p class="card-text text-dark"> Learn how to create a site from scratch with this comprehensive beginner's guide! We walk you through the process from start to publish.....
                                <a href="your-link-here" class="text-danger float-right">Read More</a>
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

    





    @endsection
