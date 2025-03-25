<?php

use App\Http\Controllers\comunacontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comunas', [comunacontroller::class, 'index']);  