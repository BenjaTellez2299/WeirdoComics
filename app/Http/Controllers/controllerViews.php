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

    public function editComic(){
        return view('editarComic');
    }

    public function consultComic(){
        return view('consultarComics');
    }

    public function addArtic(){
        return view('agregarArticulo');
    }

    public function editArtic(){
        return view('editarArticulo');
    }

    public function consultArtic(){
        return view('consultarArticulo');
    }

    public function addUsu(){
        return view('agregarUsuario');
    }

    public function editUsu(){
        return view('editarUsuario');
    }

    public function consultUsu(){
        return view('consultarUsuario');
    }

    public function addProve(){
        return view('agregarProveedor');
    }

    public function editProve(){
        return view('editarProveedor');
    }

    public function consultProve(){
        return view('consultarProveedor');
    }

    public function inventario(){
        return view('inventario');
    }

}
