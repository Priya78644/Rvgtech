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


@endsection