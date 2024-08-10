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

    public function register (){
        return view('front.register');
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
}