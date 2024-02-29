<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/ryokan');
Route::get('/ryokan', function () {
    return view('ryokan');
});
Route::get('/onsen', function () {
    return view('onsen');
});
Route::get('/result', function () {
    return view('result');
});
