<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validateLogin;
use App\Http\Requests\validateComics;
use App\Http\Requests\validateArticulo;
use App\Http\Requests\validateProveedor;
use App\Http\Requests\validateUsuario;

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

    public function realizarpedido(){
        return view('realizarpedido');
    }

    public function reportes(){
        return view('reportes');
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

    public function agregar_articulos(validateArticulo $req){
        return redirect('consultarArticulo')
        ->with('confirm','Datos correctos')
        ->with('articulo', $req->txtTipo);
    }


    public function agregar_proveedor(validateProveedor $req){
        return redirect('consultarProveedor')
        ->with('confirm','Datos correctos')
        ->with('empresa', $req->txtEmpresa);
    }



    public function editProveedor(validateProveedor $req){
        return redirect('consultarProveedor')
        ->with('editap','Datos recibidos')
        ->with('proveedor', $req->txtEmpresa);
    }

    public function deleteProveedor(){
        return redirect('consultarProveedor')
        ->with('eliminap','Datos recibidos');
    }


    public function agregar_usuario(validateUsuario $req){
        return redirect('consultarUsuario')
        ->with('confirm','Datos correctos')
        ->with('usuario', $req->txtNomb);
    }

}
