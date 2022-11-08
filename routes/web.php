<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerViews;

Route::get('/', [controllerViews::class, 'showLogin'])->name('login');

Route::get('menu', [controllerViews::class, 'showMenu'])->name('menu');

Route::get('agregarComic', [controllerViews::class, 'addComic'])->name('addComic');
