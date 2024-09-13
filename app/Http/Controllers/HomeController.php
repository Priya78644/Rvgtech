<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Property;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function dashboard(){
        $properties = Blog::all();
        $categories = Category::all();
        return view('dashboard.dashboard', compact('properties', 'categories'));
    }




    public function index (){
        $blogs = Blog::all();
        return view('front.index', compact('blogs'));
    }

    public function email (){
        return view('front.email');
    }
    public function details (Blog $blog){
        
        return view('front.details', compact('blog'));
    }

    public function affiliate(){
        return view('front.affiliate');
    }

    public function adsens (){
        return view('front.adsens');
    }

    public function contact (){
        return view('front.contact');
    }

    public function life (){
        return view('front.life');
    }

    public function technology (){
        return view('front.technology');
    }

    public function internet (){
        return view('front.internet');
    }

    public function seo (){
        return view('front.seo');
    }

    public function blogspot (){
        return view('front.blogspot');
    }

    public function education (){
        return view('front.education');
    }
    public function fact (){
        return view('front.fact');
    }
}
