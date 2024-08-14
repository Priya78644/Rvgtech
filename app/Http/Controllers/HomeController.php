<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        return view('front.index');
    }

    public function email (){
        return view('front.email');
    }
    public function details (){
        return view('front.details');
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
