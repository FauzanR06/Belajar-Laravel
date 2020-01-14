<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('ZAN');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});

// Route::get('/belajar', function () {
//     return view('myProject');
// });

// Route::get('/belajar', function () {
//     return view('contact');
// });

// Route::get('/routes-1', function () {
//     echo " Tulisan ini di tampilkan dari routes 1";
// });

// Route::get('/routes-2', function () {
//     echo " Tulisan ini di tampilkan dari routes 2";
// });

// Route::get('/routes-3', function () {
//     echo " Tulisan ini di tampilkan dari routes 3";
// });

