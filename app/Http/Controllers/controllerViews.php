<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validateLogin;
use App\Http\Requests\validateComics;

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

    public function consComic(){
        return view('consultarComics');
    }

    public function addArtic(){
        return view('agregarArticulo');
    }

    public function editArtic(){
        return view('editarArticulo');
    }

    public function consArtic(){
        return view('consultarArticulo');
    }

    public function addUsu(){
        return view('agregarUsuario');
    }

    public function editUsu(){
        return view('editarUsuario');
    }

    public function consUsu(){
        return view('consultarUsuario');
    }

    public function addProve(){
        return view('agregarProveedor');
    }

    public function editProve(){
        return view('editarProveedor');
    }

    public function consProve(){
        return view('consultarProveedor');
    }

    public function inventario(){
        return view('inventario');
    }

    public function ventas(){
        return view('ventas');
    }
    
    public function iniciarSesion(validateLogin $req){
        return redirect('menu')
        ->with('confirm','Datos correctos')
        ->with('user', $req->txtUser);
    }

    public function agregarComic(validateComics $req){
        return redirect('consultarComics')
        ->with('confirm','Datos recibidos')
        ->with('comic', $req->txtNombre);
    }

    public function editComics(validateComics $req){
        return redirect('consultarComics')
        ->with('edita','Datos recibidos')
        ->with('comic', $req->txtNombre);
    }

    public function deleteComics(){
        return redirect('consultarComics')
        ->with('elimina','Datos recibidos');
    }

}
