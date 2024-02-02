<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PieController extends Controller
{
    public function home(){
        return view('pie-home');
    }

    public function about(){
        return view('pie-about');
    }

    public function products(){
        return view('pie-products');
    }

    public function store(){
        return view('pie-store');
    }

    public function contact(){
        return view('pie-contact');
    }
}
