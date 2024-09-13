
{{-- Trending Topic Start --}}
<div class="container-fluid topics mb-5">
    <div class="container py-5">
        <h2 class="mb-4 text-center">Trending Topics</h2>
        <div class="row">
            @foreach($blogs as $blog)

            <!-- Topic 1 -->
            <div class="col-md-4 mb-4">
                <a href="{{route('detail', ['blog' => $blog->id])}}" class="text-decoration-none">
                    <div class="card border-light">
                        <img src="{{ asset('storage/' .$blog->image) }}" class="card-img-top img-fluid rounded-square"
                            alt="{{$blog->name}}" style="max-width: 100%; height: auto;">
                        <div class="card-body">
                            <h5 class="card-title text-danger">{{$blog->name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">3 days ago</h6>
                            <p class="card-text text-primary">{{$blog->description}}</p>00
                        
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

            <!-- Topic 2 -->
            <div class="col-md-4 mb-4">
                <a href="{{route('detail', ['blog' => $blog->id])}}" class="text-decoration-none">
                    <div class="card border-light">
                        <img src="{{ asset('storage/' .$blog->image) }}" class="card-img-top img-fluid rounded-square"
                            alt="Bollywood Image" style="max-width: 100%; height: auto;">
                        <div class="card-body">
                            <h5 class="card-title text-danger">{{$blog->name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">5 days ago</h6>
                            <p class="card-text text-primary"> {{$blog->description}}
                                </p>
                           
                        </div>
                    </div>
                </a>
            </div>
           
        </div>
    </div>
</div>
    {{-- Trending Topics End --}}

    {{--  Mid PAge  News  Section Start  --}}
    <div class="container-fluid ">
        <div class="container">
            <div class="row g-4">

                <!-- Left Side  Section Start -->
                <div class="col-lg-3 position-sticky sidebar">
                    <div class="p-4 pt-0 shadow bg-body rounded">
                        <div class="row g-0"> 
                            <div class="col-12 mt-4">
                                <div class="row g-0 align-items-center mb-3">
                                    <div class="col-10">
                                        <div class="features-content d-flex flex-column  p-2 rounded">
                                            <a href="{{route('detail', ['blog' => $blog->id])}}" class="h6 text-dark">
                                                {{$blog->name}}</a>
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
                                            <a href="{{route('detail', ['blog' => $blog->id])}}" class="h6 text-dark">{{$blog->name}}
                                                </a>
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
                                            <a href="{{route('detail', ['blog' => $blog->id])}}" class="h6 text-dark">{{$blog->name}}
                                               </a>
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
                                            <a href="{{route('detail', ['blog' => $blog->id])}}" class="h6 text-dark">{{$blog->name}}
                                              </a>
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
                        <img src="{{ asset('storage/' .$blog->image) }}" class="img-fluid rounded img-zoomin w-100"
                            alt="">
                        <div class="d-flex justify-content-center px-4 position-absolute flex-wrap"
                            style="bottom: 10px; left: 0;">
                            <a href="{{route('detail', ['blog' => $blog->id])}}" class="text-white me-3 link-hover"><i class="fa fa-clock"></i> 06 minute
                                read</a>
                            <a href="{{route('detail', ['blog' => $blog->id])}}" class="text-white me-3 link-hover"><i class="fa fa-eye"></i> 3.5k Views</a>
                            <a href="{{route('detail', ['blog' => $blog->id])}}" class="text-white me-3 link-hover"><i class="fa fa-comment-dots"></i> 05
                                Comment</a>
                            <a href="#" class="text-white link-hover"><i class="fa fa-arrow-up"></i> 1.5k Share</a>
                        </div>
                    </div>
                    <div class="border-bottom py-2">
                        <a href="{{route('detail', ['blog' => $blog->id])}}" class="display-7 text-dark mb-0 link-hover">  {{$blog->name}}</a>
                    </div>
                    <p class="mt-3 mb-4">{{$blog->description}}</p>
                    <div class="bg-light p-4 rounded">
                        <div class="news-2">
                            <h3 class="mb-4">{{$blog->name}}</h3>
                        </div>
                        <div class="row g-4 align-items-center">
                            <div class="col-md-6">
                                <div class="rounded overflow-hidden">
                                    <img src="{{ asset('storage/' .$blog->image) }}"
                                        class="img-fluid rounded img-zoomin w-100" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex flex-column">
                                    <a href="{{route('detail',['blog' => $blog->id])}}" class="h3">{{$blog->name}}
                                       </a>
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
                        <div class="row g-6">
                            <div class="col-12 mt-4">
                                <div class="rounded overflow-hidden">
                                    <img src="{{ asset('storage/' .$blog->image) }}"
                                        class="img-fluid rounded img-zoomin w-100" alt="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex flex-column">
                                    <a href="{{route('detail', ['blog' => $blog->id])}}" class="h4 mb-2">{{$blog->name}}</a>
                                    <p class="fs-5 mb-0"><i class="fa fa-clock"></i> 06 minute read</p>
                                    <p class="fs-5 mb-0"><i class="fa fa-eye"></i> 3.5k Views</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row g-4 align-items-center">
                                    <div class="col-5">
                                        <div class="overflow-hidden rounded">
                                            <img src="{{ asset('storage/' .$blog->image) }}"
                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="features-content d-flex flex-column">
                                            <a href="{{route('detail', ['blog' => $blog->id])}}" class="h6">{{$blog->name}}</a>
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
                                            <img src="{{ asset('storage/' .$blog->image) }}"
                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="features-content d-flex flex-column">
                                            <a href="{{route('detail', ['blog' => $blog->id])}}" class="h6">{{$blog->name}}</a>
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
                                            <img src="{{ asset('storage/' .$blog->image) }}"
                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="features-content d-flex flex-column">
                                            <a href="{{route('detail', ['blog' => $blog->id])}}" class="h6">{{$blog->name}}</a>
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
                                            <img src="{{ asset('storage/' .$blog->image) }}"
                                                class="img-zoomin img-fluid rounded w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="features-content d-flex flex-column">
                                            <a href="{{route('detail', ['blog' => $blog->id])}}" class="h6">{{$blog->name}}</a>
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
        <h1 class="text-bold text-center mt-5">{{$blog->name}}</h1>
        <div class="container py-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <a href="{{route('detail', ['blog' => $blog->id])}}" class="trending">
                        <div class="card h-100 hover-effect">
                            <img class="card-img-top" src="{{ asset('storage/' .$blog->image) }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-danger">{{$blog->name}}</h5>
                                <p class="card-text text-dark">
                                    {{$blog->description}}
                                    <a href="{{route('detail', ['blog' => $blog->id])}}" class="text-danger float-right">Read More</a>
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{route('detail', ['blog' => $blog->id])}}" class="trending">
                        <div class="card h-100 hover-effect">
                            <img class="card-img-top" src="{{ asset('storage/' .$blog->image) }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-danger">{{$blog->name}}</h5>
                                <p class="card-text text-dark">
                                    {{$blog->description}}
                                    <a href="{{route('detail', ['blog' => $blog->id])}}" class="text-danger float-right">Read More</a>
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{route('detail', ['blog' => $blog->id])}}" class="trending">
                        <div class="card h-100 hover-effect">
                            <img class="card-img-top" src="{{ asset('storage/' .$blog->image) }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-danger">{{$blog->name}}</h5>
                                <p class="card-text text-dark">
                                    {{$blog->description}}
                                    <a href="{{route('detail', ['blog' => $blog->id])}}" class="text-danger float-right">Read More</a>
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
    <h1 class="text-bold text-center">{{$blog->name}}</h1>
    <div class="container py-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <a href="#" class="trending">
                    <div class="card h-100 card-hover">
                        <img class="card-img-top" src="{{ asset('storage/' .$blog->image) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-danger">{{$blog->name}}</h5>
                            <p class="card-text text-dark">{{$blog->description}}
                                <a href="your-link-here" class="text-danger float-right">{{$blog->name}}</a>
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
                        <img class="card-img-top" src="{{ asset('storage/' .$blog->image) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-danger">{{$blog->name}}</h5>
                            <p class="card-text text-dark">{{$blog->description}}
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
                        <img class="card-img-top" src="{{ asset('storage/' .$blog->image) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-danger">{{$blog->name}}</h5>
                            <p class="card-text text-dark">{{$blog->description}}
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

{{-- Poster Start --}}

<section class="hero-section d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('storage/' .$blog->image) }}" alt="Illustration" class="img-fluid">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center text-white text-center">
                <h1 class="display-4 font-weight-bold">{{$blog->name}}</h1>
                <p class="lead"> {{$blog->description}} </p>
                <p class="lead">{{$blog->description}}</p>
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
   


