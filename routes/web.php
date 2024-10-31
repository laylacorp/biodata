<?php

use App\Http\Controllers\JalurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Ini adalah route tanpa MVC
Route::get('/jalurbaru', function(){
    return 'Ini Jalur Baru Tanpa MVC';
});


// Ini adalah route menggunakan View
Route::get('/jalurview', function () {
    return view('viewjalur');
});

// Ini adalah route menggunakan view & controller
Route::get('/jalurcontroller', [JalurController::class, 'index']);


// Ini adalah route menggunakan view, controller & model
Route::get('/jalurmodel', [JalurController::class, 'menampilkanDataModel']);
