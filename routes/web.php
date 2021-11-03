<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/submit', function () {
    return view('pages.submitcar');
});


Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/viewinventory', function () {
    return view('pages.viewinventory');
});

Route::get('/submitcar', function () {
    return view('pages.submitcar');
});



Route::get('/pages', function () {
    return view('pages.index');
});






