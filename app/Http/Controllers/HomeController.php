<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function feria()
    {
        return view('frontend.home');
    }

    public function index()
    {
        return view('frontend.home');
    }
    public function visitantes(){
        return view('frontend.visitantes');
    }
    public function noticias(){
        return view('frontend.noticias');
    }
    public function galeria(){
        return view('frontend.galeria');
    }
    public function contacto(){
        return view('frontend.contacto');
    }


    public function detalle(){
        return view('frontend.detalle');
    }
    public function elproceso(){
        return view('frontend.elproceso');
    }
    
}
