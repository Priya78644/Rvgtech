@extends('components.main')
@section('content')




<!-- Tech Post Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img">
                    <img class="img-fluid" src="{{asset('assets/img/techpost.png')}}">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
               
                <h1 class="mb-4">We Make Your Business Smarter with Technical Intelligence</h1>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                    amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                    clita duo justo et tempor eirmod magna dolore erat amet Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no
                    labore lorem sit. Sanctus clita duo justo et tempor Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                    amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit.</p>
                <p class="mb-4">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no
                    labore lorem sit. Sanctus clita duo justo et tempor Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no
                    labore lorem sit. Sanctus clita duo justo et temporAliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no
                    labore lorem sit. Sanctus clita duo justo et tempor.</p>
                <div class="row g-3">
                </div>
                <div class="d-flex align-items-center mt-4">
    
                    <a class="btn btn-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tech Poster End -->









{{-- TEchnology Cards Start --}}

<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="{{asset('assets/img/tech1.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Information technology (IT)</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="{{asset('assets/img/tech2.jpeg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Artificial intelligence</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="{{asset('assets/img/tech3.webp')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Robotics</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
    </div>
  
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
      <div class="col">
        <div class="card h-100">
          <img src="{{asset('assets/img/tech4.png')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">IT Jobs</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="{{asset('assets/img/tech5.png')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Network engineer/architect</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="{{asset('assets/img/tech6.webp')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Web developer</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Technology cards end  --}}

  <br>
  


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