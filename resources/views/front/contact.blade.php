@extends('components.main')
@section('content')


  <!-- Contact Start -->
  <div class="container-fluid contact py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
            <h1 class="display-5 mb-4">Get In Touch With Us</h1>
            <p class="mb-0">Dolor sit amet consectetur, adipisicing elit. Ipsam, beatae maxime. Vel animi eveniet doloremque reiciendis soluta iste provident non rerum illum perferendis earum est architecto dolores vitae quia vero quod incidunt culpa corporis, porro doloribus. Voluptates nemo doloremque cum.
            </p>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <h2 class="display-5 mb-2">Our Contact Form</h2>
                <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a class="text-primary fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                <form>
                    <div class="row g-3">
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="phone" class="form-control" id="phone" placeholder="Phone">
                                <label for="phone">Your Phone</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="project" placeholder="Project">
                                <label for="project">Your Project</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                <div class="d-flex align-items-center mb-4">
                    <div class="bg-light d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-home fa-2x text-primary"></i></div>
                    <div class="ms-4">
                        <h4>Addresses</h4>
                        <p class="mb-0">123 ranking Street, New York, USA</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="bg-light d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-map-marker-alt fa-2x text-primary"></i></div>
                    <div class="ms-4">
                        <h4>Addresses</h4>
                        <p class="mb-0">123 ranking Street, New York, USA</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="bg-light d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-phone-alt fa-2x text-primary"></i></div>
                    <div class="ms-4">
                        <h4>Mobile</h4>
                        <p class="mb-0">+012 345 67890</p>
                        <p class="mb-0">+012 345 67890</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="bg-light d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-envelope-open fa-2x text-primary"></i></div>
                    <div class="ms-4">
                        <h4>Email</h4>
                        <p class="mb-0">info@example.com</p>
                        <p class="mb-0">info@example.com</p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="me-4">
                        <div class="bg-light d-flex align-items-center justify-content-center" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fas fa-share fa-2x text-primary"></i></div>
                    </div>
                    <div class="d-flex">
                        <a class="btn btn-lg-square btn-primary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="rounded h-100">
                    <iframe class="rounded w-100" 
                    style="height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd" 
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

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