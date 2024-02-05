<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PieController extends Controller
{

    /**
     * Affichage de la page home
     */
    public function home(){
        return view('pie-home');
    }

    /**
     * Affichage de la page about
     */
    public function about(){
        return view('pie-about');
    }

    /**
     * Affichage de la page products
     */
    public function products(){
        return view('pie-products');
    }

    /**
     * Affichage de la page store
     */
    public function store(){
        return view('pie-store');
    }

    /**
     * Affichage de la page contact
     */
    public function contact(){
        return view('pie-contact');
    }

    /**
     * Affichage des données envoyées dans le formulaire de la page contact
     */
    public function contactForm(Request $request){
        return view('pie-contact', ['data' => $request]);
     }
}
