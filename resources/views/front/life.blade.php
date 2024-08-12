@extends('components.main')
@section('content')



<div class="container text-center">

    <div class="row">

        <div class="col-md-6 mt-4">
            <img src="{{asset('assets/img/life1.jpg')}}" alt="Financial Freedom" class="img-fluid">
            <h2>Your journey towards <br><span style="color: #8DC63F;">FINANCIAL FREEDOM</span> starts here!</h2>
            <p>To inspire financial hope and freedom by revealing little-known truths about money while investing in trusting, long-term relationshipsTo inspire financial hope and freedom by revealing little-known truths about money while investing in trusting, long-term relationships.</p>
           
        </div>

        <div class="col-md-6 mt-4">
            <img src="{{asset('assets/img/life2.jpg')}}" alt="Life Success & Legacy" class="img-fluid">
            <h2>Why does Life Success & Legacy exist?</h2>
            <p>To inspire financial hope and freedom by revealing little-known truths about money while investing in trusting, long-term relationships.To inspire financial hope and freedom by revealing little-known truths about money while investing in trusting, long-term relationships</p>
            
        </div>
    </div>
</div>

<div id="trailer" class="section d-flex justify-content-center">
    <div class="video-wrapper position-relative w-100" style="max-width: 1200px;">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/bdb0p_8t2Bg?si=-r8661EF841LuTYJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            
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