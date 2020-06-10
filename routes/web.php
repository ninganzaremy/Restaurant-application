<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/menu', function () {
    return view('menu/index');
});
Route::get('/pages', function () {
    return view('pages/about');
});
Route::get('/Waitlist', function () {
    return view('pages/waitlist');
});
Route::get('/contact', function () {
    return view('pages/contact');
});
Route::get('/giftcards', function () {
    return view('pages/giftcards');
});
Route::get('/Offers', function () {
    return view('pages/offers');
});
