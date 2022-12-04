<?php

use App\Http\Controllers\controladorProveedores;
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
Route::post('editarArticulo', [controllerViews::class, 'editArtics'])->name('editArtics');
Route::get('borrarArticulo', [controllerViews::class, 'deleteArtics'])->name('delArtic');

//USUARIO
Route::get('agregarUsuario', [controllerViews::class, 'addUsu'])->name('addUsu');
Route::get('consultarUsuario', [controllerViews::class, 'consUsu'])->name('consUsu');
Route::get('editarUsuario', [controllerViews::class, 'editUsu'])->name('editUsu');
Route::post('agregarUser', [controllerViews::class, 'agregar_usuario'])->name('addUsua');
Route::post('editarUser', [controllerViews::class, 'editUse'])->name('editUse');
Route::get('borrarUser', [controllerViews::class, 'deleteUse'])->name('delUse');


// RUTAS DE PROVEEDORES

Route::get('prov/create', [controladorProveedores::class, 'create'])->name('prov.create');
Route::post('prov/store', [controladorProveedores::class, 'store'])->name('prov.store');
Route::get('prov/index', [controladorProveedores::class, 'index'])->name('prov.index');
Route::get('prov/{id}/edit', [controladorProveedores::class, 'edit'])->name('prov.edit');
Route::put('prov/{id}', [controladorProveedores::class, 'update'])->name('prov.update');
Route::delete('prov/{id}', [controladorProveedores::class, 'destroy'])->name('prov.destroy');


//Inventarios
Route::get('inventario', [controllerViews::class, 'inventario'])->name('invent');
Route::get('realizarpedido', [controllerViews::class, 'realizarpedido'])->name('realip');

//Ventas
Route::get('ventas', [controllerViews::class, 'ventas'])->name('vent');
Route::get('reportes', [controllerViews::class, 'reportes'])->name('report');
Route::get('ventaRealizada', [controllerViews::class, 'ventaRealizada'])->name('venta');

Route::get('realizarpedido', [controllerViews::class, 'realizarpedido'])->name('realip');


Route::get('reportes', [controllerViews::class, 'reportes'])->name('report');
