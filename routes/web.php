<?php

use Illuminate\Support\Facades\Route;
use App\Http\compra;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ticket', function () {
    return view('ticket');
});



//CRUD DE MIEMBROS
Route::post('/compra/store', [compracontroller::class,'store'])->name('compra.store');
Route::get('/users/{name?}' , [SayhelloController::class,'index']);