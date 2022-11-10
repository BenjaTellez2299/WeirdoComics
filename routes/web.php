<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerViews;

Route::get('/', [controllerViews::class, 'showLogin'])->name('login');
Route::post('iniciarSesion', [controllerViews::class, 'iniciarSesion'])->name('inicSes');

Route::get('menu', [controllerViews::class, 'showMenu'])->name('menu');

//COMICS
Route::get('agregarComic', [controllerViews::class, 'addComic'])->name('addComic');
Route::get('consultarComics', [controllerViews::class, 'consComic'])->name('consComic');
Route::get('editarComic', [controllerViews::class, 'editComic'])->name('editComic');
Route::post('agregarComics', [controllerViews::class, 'agregarComic'])->name('addComics');
Route::post('editarComics', [controllerViews::class, 'editComics'])->name('editComics');
Route::get('borrarComic', [controllerViews::class, 'deleteComics'])->name('delComic');

//ARTÍCULO
Route::get('agregarArticulo', [controllerViews::class, 'addArtic'])->name('addArtic');
Route::get('consultarArticulo', [controllerViews::class, 'consArtic'])->name('consArtic');
Route::get('editarArticulo', [controllerViews::class, 'editArtic'])->name('editArtic');
Route::post('agregarArticulo', [controllerViews::class, 'agregar_articulos'])->name('addArti');

//USUARIO
Route::get('agregarUsuario', [controllerViews::class, 'addUsu'])->name('addUsu');
Route::get('consultarUsuario', [controllerViews::class, 'consUsu'])->name('consUsu');
Route::get('editarUsuario', [controllerViews::class, 'editUsu'])->name('editUsu');
Route::post('agregarUsuario', [controllerViews::class, 'agregar_usuario'])->name('addUsua');
//PROVEEDOR
Route::get('agregarProveedor', [controllerViews::class, 'addProve'])->name('addProve');
Route::get('consultarProveedor', [controllerViews::class, 'consProve'])->name('consProve');
Route::get('editarProveedor', [controllerViews::class, 'editProve'])->name('editProve');

Route::get('inventario', [controllerViews::class, 'inventario'])->name('invent');

Route::get('ventas', [controllerViews::class, 'ventas'])->name('vent');

Route::get('realizarpedido', [controllerViews::class, 'realizarpedido'])->name('vent');

Route::post('agregarProveedor', [controllerViews::class, 'agregar_proveedor'])->name('addPro');