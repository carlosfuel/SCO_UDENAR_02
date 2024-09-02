<?php

use App\Http\Controllers\PrimerControlador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//route::get('test', [PrimerControlador::class,'index']);
//route::get('test2', [\App\Http\Controllers\SegundoControlador::class, 'index']);

//route::resource('post',PrimerControlador::class);

Route::get('otro/{post?}/{otro?}',[PrimerControlador::class,'otro']);