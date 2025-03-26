<?php

use App\Http\Controllers\comunacontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comunas', [comunacontroller::class, 'index']) -> name('comunas.index');  
Route::post('/comunas', [comunacontroller::class, 'store'])-> name('comunas.store');  
Route::get('/comunas/create', [comunacontroller::class, 'create'])-> name('comunas.create');  