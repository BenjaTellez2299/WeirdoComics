<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerViews extends Controller
{
    public function showLogin(){
        return view('login');
    }
    
    public function showMenu(){
        return view('menu');
    }

    public function addComic(){
        return view('agregarComic');
    }

    public function consultComic(){
        return view('consultarComics');
    }

}
