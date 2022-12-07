<?php

use App\Http\Controllers\controladorArticulos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerViews;
use App\Http\Controllers\controladorProveedores;
use App\Http\Controllers\controladorComics;
use App\Http\Controllers\controladorUsuarios;
use App\Http\Controllers\UserController;

Route::get('/', [controllerViews::class, 'showLogin'])->name('login');
Route::post('iniciarSesion', [controllerViews::class, 'iniciarSesion'])->name('inicSes');

Route::get('menu', [controllerViews::class, 'showMenu'])->name('menu');

//COMICS
//Route::get('agregarComic', [controllerViews::class, 'addComic'])->name('addComic');
Route::get('consultarComics', [controllerViews::class, 'consComic'])->name('consComic');
Route::get('editarComic', [controllerViews::class, 'editComic'])->name('editComic');
Route::post('agregarComics', [controllerViews::class, 'agregarComic'])->name('addComics');
Route::post('editarComics', [controllerViews::class, 'editComics'])->name('editComics');
Route::get('borrarComic', [controllerViews::class, 'deleteComics'])->name('delComic');

//ARTÍCULO
//Route::get('agregarArticulo', [controllerViews::class, 'addArtic'])->name('addArtic');
//Route::get('consultarArticulo', [controllerViews::class, 'consArtic'])->name('consArtic');
//Route::get('editarArticulo', [controllerViews::class, 'editArtic'])->name('editArtic');
//Route::post('agregarArticulo', [controllerViews::class, 'agregar_articulos'])->name('addArti');
//Route::post('editarArticulo', [controllerViews::class, 'editArtics'])->name('editArtics');
//Route::get('borrarArticulo', [controllerViews::class, 'deleteArtics'])->name('delArtic');

//USUARIO
//Route::get('agregarUsuario', [controllerViews::class, 'addUsu'])->name('addUsu');
//Route::get('consultarUsuario', [controllerViews::class, 'consUsu'])->name('consUsu');
//Route::get('editarUsuario', [controllerViews::class, 'editUsu'])->name('editUsu');
//Route::post('agregarUser', [controllerViews::class, 'agregar_usuario'])->name('addUsua');
//Route::post('editarUser', [controllerViews::class, 'editUse'])->name('editUse');
//Route::get('borrarUser', [controllerViews::class, 'deleteUse'])->name('delUse');

//PROVEEDOR
//Route::get('agregarProveedor', [controllerViews::class, 'addProve'])->name('addProve');
//Route::get('consultarProveedor', [controllerViews::class, 'consProve'])->name('consProve');
//Route::get('editarProveedor', [controllerViews::class, 'editProve'])->name('editProve');
//Route::post('agregarProveedor', [controllerViews::class, 'agregar_proveedor'])->name('addPro');
//Route::post('editarProveedor', [controllerViews::class, 'editProveedor'])->name('editProvee');
//Route::get('borrarProveedor', [controllerViews::class, 'deleteProveedor'])->name('delProvee');

//Inventarios
Route::get('inventario', [controllerViews::class, 'inventario'])->name('invent');
Route::get('realizarpedido', [controllerViews::class, 'realizarpedido'])->name('realip');

//Ventas
Route::get('ventas', [controllerViews::class, 'ventas'])->name('vent');
Route::get('reportes', [controllerViews::class, 'reportes'])->name('report');
Route::get('ventaRealizada', [controllerViews::class, 'ventaRealizada'])->name('venta');
Route::get('realizarpedido', [controllerViews::class, 'realizarpedido'])->name('realip');
Route::get('reportes', [controllerViews::class, 'reportes'])->name('report');

//RUTAS CONTROLADOR USUARIOS -r
Route::get('usuario/create', [controladorUsuarios::class, 'create'])->name('usuario.create');
Route::post('usuario',[controladorUsuarios::class, 'store'])->name('usuario.store');
Route::get('usuario',[controladorUsuarios::class, 'index'])->name('usuario.index');
Route::get('usuario/{id}/edit',[controladorUsuarios::class, 'edit'])->name('usuario.edit');
Route::put('usuario/{id}',[controladorUsuarios::class, 'update'])->name('usuario.update');
Route::delete('usuario/{id}', [controladorUsuarios::class, 'destroy'])->name('usuario.destroy');

//RUTAS CONTROLADOR ARTICULOS -r
Route::get('articulo/create', [controladorArticulos::class, 'create'])->name('articulo.create');
Route::post('articulo',[controladorArticulos::class, 'store'])->name('articulo.store');
Route::get('articulo',[controladorArticulos::class, 'index'])->name('articulo.index');
Route::get('articulo/{id}/edit',[controladorArticulos::class, 'edit'])->name('articulo.edit');
Route::put('articulo/{id}',[controladorArticulos::class, 'update'])->name('articulo.update');
Route::delete('articulo/{id}', [controladorArticulos::class, 'destroy'])->name('articulo.destroy');

//RUTAS CONTROLADOR PROVEEDORES -r
Route::get('prove/create', [controladorProveedores::class, 'create'])->name('prove.create');
Route::post('prove', [controladorProveedores::class, 'store'])->name('prove.store');
Route::get('prove', [controladorProveedores::class, 'index'])->name('prove.index');
Route::get('prove/{id}/edit', [controladorProveedores::class, 'edit'])->name('prove.edit');
Route::put('prove/{id}', [controladorProveedores::class, 'update'])->name('prove.update');
Route::delete('prov/{id}', [controladorProveedores::class, 'destroy'])->name('prov.destroy');

//RUTAS CONTROLADOR COMICS -r
Route::get('comic/create', [controladorComics::class, 'create'])->name('comic.create');
Route::post('comic', [controladorComics::class, 'store'])->name('comic.store');
Route::get('comic', [controladorComics::class, 'index'])->name('comic.index');
Route::get('comic/{id}/edit', [controladorComics::class, 'edit'])->name('comic.edit');
Route::put('comic/{id}', [controladorComics::class, 'update'])->name('comic.update');
Route::delete('comic/{id}', [controladorComics::class, 'destroy'])->name('comic.destroy');

Route::get('inventario', [controladorArticulos::class, 'show'])->name('inventario.show');

//PDF
Route::get('user-list-pdf', [UserController::class, 'exportPdf'])->name('users.pdf');