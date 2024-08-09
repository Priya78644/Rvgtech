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
}