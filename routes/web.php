<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('menu', function () {
    return view('menu');
});

Route::get('agregarComic', function () {
    return view('agregarComic');
});

<<<<<<< Updated upstream
Route::get('consultarComics', function () {
    return view('consultarComics');
});

=======
Route::get('agregarArticulo', function () {
    return view('agregarArticulo');
});

Route::get('agregarUsuario', function () {
    return view('agregarUsuario');
});

Route::get('agregarProveedor', function () {
    return view('agregarProveedor');
});

Route::get('editarComic', function () {
    return view('editarComic');
});

Route::get('editarArticulo', function () {
    return view('editarArticulo');
});

Route::get('editarProveedor', function () {
    return view('editarProveedor');
});

Route::get('editarUsuario', function () {
    return view('editarUsuario');
});
>>>>>>> Stashed changes
