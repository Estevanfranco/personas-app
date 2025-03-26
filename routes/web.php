<?php

use App\Http\Controllers\comunacontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comunas', [comunacontroller::class, 'index']) -> name('comunas.index');  
Route::post('/comunas', [comunacontroller::class, 'store'])-> name('comunas.store');  
Route::get('/comunas/create', [comunacontroller::class, 'create'])-> name('comunas.create');  
Route::delete('/comunas/{comuna}', [comunacontroller::class, 'destroy'])-> name('comunas.destroy');  
Route::put('/comunas/{comuna}', [comunacontroller::class, 'update'])-> name('comunas.update');  
Route::get('/comunas/{comuna}/edit', [comunacontroller::class, 'edit'])-> name('comunas.edit');  
