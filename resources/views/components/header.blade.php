  <!-- Topbar Start -->
<div class="container-fluid bg-dark py-2 d-md-flex">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center topbar">
            <div class="top-info text-center text-md-start mb-2 mb-md-0">
                <small class="me-3 text-white-50"><a href="#"><i class="fas fa-map-marker-alt me-2 text-danger"></i></a>Real Victory Groups, Kanpur</small>
                <small class="me-3 text-white-50"><a href="#"><i class="fas fa-envelope me-2 text-danger"></i></a>Email@Example.com</small>
            </div>
            <div id="note" class="text-light mb-2 mb-md-0 d-none d-xl-flex"><small>Note: We help you to Grow your Business</small></div>
            <div class="top-link text-center text-md-end">
                <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-facebook-f text-danger"></i></a>
                <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-twitter text-danger"></i></a>
                <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-instagram text-danger"></i></a>
                <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle me-0"><i class="fab fa-linkedin-in text-danger"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid  bg-red">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg py-0">
            <a href="{{route('home')}}" class="navbar-brand">
                <h1 class="text-white fw-bold d-block">Rvg<span class="text-dark">Tech</span> </h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                <div class="navbar-nav ms-auto mx-xl-auto p-0">
                    <a href="{{route('home')}}" class="nav-item nav-link active text-light">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blogging</a>
                        <div class="dropdown-menu rounded">
                            <a href="{{route('email')}}" class="dropdown-item">Email Marketing</a>
                            <a href="{{route('affiliate')}}" class="dropdown-item">Affiliate Marketing</a>
                            <a href="{{route('adsens')}}" class="dropdown-item">Adsense</a>
                            
                            <a href="{{route('blogspot')}}" class="dropdown-item">Blog Spot</a>
                        </div>
                    </div>
                    <a href="{{route('seo')}}" class="nav-item nav-link">SEO</a>
                    <a href="{{route('technology')}}" class="nav-item nav-link">Technology</a>
                    <a href="{{route('life')}}" class="nav-item nav-link">Life Success</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">More</a>
                        <div class="dropdown-menu rounded">
                            <a href="{{route('internet')}}" class="dropdown-item">Internet</a>
                            <a href="{{route('education')}}" class="dropdown-item">Education</a>
                            <a href="{{route('fact')}}" class="dropdown-item">Interesting Fact</a>
                            <a href="404.html" class="dropdown-item">Social Media</a>
                        </div>
                    </div>
                    <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                </div>
            </div>
            <div class="d-none d-xl-flex flex-shirink-0">
                <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                    <a href="" class="position-relative animated tada infinite">
                        <i class="fa fa-phone-alt text-white fa-2x"></i>
                        <div class="position-absolute" style="top: -7px; left: 20px;">
                            <span><i class="fa fa-comment-dots "></i></span>
                        </div>
                    </a>
                </div>
               
                <div class="d-flex align-items-center justify-content-center ms-4 ">
                    <a href="#"><i class="bi bi-search text-white fa-2x"></i> </a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->