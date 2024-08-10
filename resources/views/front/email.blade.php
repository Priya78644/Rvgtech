@extends('components.main')
@section('content')



{{-- EMail Marketing  Start--}}
{{-- News Content Start --}}
    <div class="container-fluid py-5">
        <div class="container py-4">
            <div class="row g-4">
                {{-- Left Sidebar Start --}}
                <div class="col-md-3 sidebar">
                    <h4>Choose a Topic</h4>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="bg-primary text-white"><a href="#uncategorized" class="text-white">Uncategorized</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-secondary text-white"><a href="#adhik" class="text-white">More</a></td>
                            </tr>
                            <tr>
                                <td class="bg-success text-white"><a href="#internet" class="text-white">Internet</a></td>
                            </tr>
                            <tr>
                                <td class="bg-danger text-white"><a href="#education" class="text-white">Education</a></td>
                            </tr>
                            <tr>
                                <td class="bg-warning text-dark"><a href="#seo" class="text-dark">SEO</a></td>
                            </tr>
                            <tr>
                                <td class="bg-info text-white"><a href="#technology" class="text-white">Technology</a></td>
                            </tr>
                            <tr>
                                <td class="bg-light text-dark"><a href="#facts" class="text-dark">Interesting Facts</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-dark text-white"><a href="#blogging" class="text-white">Blogging</a></td>
                            </tr>
                            <tr>
                                <td class="bg-primary text-white"><a href="#youtube" class="text-white">YouTube</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                {{-- Left SideBar End--}}

                {{-- Main Content Section --}}

                <div class="col-md-8 col-lg-6 shadow bg-body ">
                    <h1>What is email marketing</h1>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">How To Get Started With Email Marketing & Make Money</h5>
                            <p class="card-text">"Email marketing is a form of digital marketing that involves sending
                                promotional messages or newsletters..</p>
                            <a href="" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Post Title 2</h5>
                            <p class="card-text">If you plan to use email to keep in touch with existing customers,
                                 then your email list can be built largely by importing your existing customers details into ......</p>
                            <a href="" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
               
                {{-- main content section end --}}


                <div class="col-md-8 col-lg-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Post Title 2</h5>
                            <p class="card-text">What is email marketing? An overview and guide......</p>
                            <a href="" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-lg-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Post Title 2</h5>
                            <p class="card-text">A brief description of the post content...</p>
                            <a href="" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                </div>



                {{--Right  Side Bar Start --}}
                <div class="col-lg-3 position-sticky sidebar">
                    <div class="bg-body shadow rounded p-5 pt-0">
                        <div class="row g-0">
                            <div class="col-12">
                                <div class="row g-0 align-items-center"> 
                                    <div class="col-10">
                                        <div class="features-content d-flex flex-column">
                                            <a href="#" class="h6">PSL 2025 To Clash With IPL As PCB Reveals
                                                Tentative Dates Amid Pakistan’s Scheduling Issues</a>
                                            <small><i class="fa fa-clock"></i> Aug 05, 2024 08:14 PM IST</small>
                                            <small><i class="fa fa-eye"></i> 3.5k Views</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row g-0 align-items-center">

                                    <div class="col-10">
                                        <div class="features-content d-flex flex-column">
                                            <a href="#" class="h6">Bangladesh Unrest: IndiGo And Air India Halt
                                                Flights To Dhaka</a>
                                            <small><i class="fa fa-clock"></i> Aug 05, 2024 07:29 PM IST</small>
                                            <small><i class="fa fa-eye"></i> 3.5k Views</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row g-0 align-items-center">

                                    <div class="col-10">
                                        <div class="features-content d-flex flex-column">
                                            <a href="#" class="h6">Supreme Court Slams Delhi Coaching Centers as
                                                ‘Death Traps,’ Demands Safety Measures</a>
                                            <small><i class="fa fa-clock"></i> Aug 05, 2024 01:11 PM</small>
                                            <small><i class="fa fa-eye"></i> 3.5k Views</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row g-0 align-items-center">

                                    <div class="col-10">
                                        <div class="features-content d-flex flex-column">
                                            <a href="#" class="h6">Next-Gen Maruti Dzire: Launching Soon With 30
                                                km/l Mileage And Cutting-Edge Safety Technologies.</a>
                                            <small><i class="fa fa-clock"></i> Aug 05, 2024 06:30 PM</small>
                                            <small><i class="fa fa-eye"></i> 3.5k Views</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Sidebar Section End -->
            </div>
        </div>
    </div>
    {{-- News Content End --}}

    <div id="trailer" class="section d-flex justify-content-center">
        <div class="video-wrapper position-relative w-100" style="max-width: 1200px;">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item shadow-lg position-absolute top-0 start-0 w-100 h-100" src="https://www.youtube.com/embed/Go3QTwORnhY?si=PMGT69QWcM1XVPh8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    
    
    
    

    {{-- Read More Content Start --}}
    <div class="container my-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{asset('assets/img/email-marketing.webp')}}" class="img-fluid" alt="Email Marketing">
            </div>
            <div class="col-md-6">
                <h2>Your Content Title</h2>
                <p>Your content goes here. You can add text, buttons, or any other HTML elements you need.</p>
                <p>More content can go here.</p>
            </div>
        </div>
    </div>
    


    {{-- Read More Content ENd --}}

    {{-- Email Marketing End --}}



    
@endsection
