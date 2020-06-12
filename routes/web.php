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

//Static Pages
Route::get('/', 'StaticPagesController@home');
Route::get('/menu/{slug}', 'StaticPagesController@singleMenu');
Route::get('/menu', 'StaticPagesController@menu');
Route::get('/about', 'StaticPagesController@about');
Route::post('/waitlist', 'StaticPagesController@waitlist');
Route::get('/contact', 'StaticPagesController@contact');
Route::get('/offers', 'StaticPagesController@offers');

//Admin Dashbopard
Route::get('/admin', 'admin\AdminController@dashboard');


//Admin FoodCategories
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');
Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create');
Route::get('/admin/food-categories/edit', 'admin\FoodCategoriesController@edit');


//Admin Autentication
Route::get('/admin/register', function () {
    return view('admin/register');
});
Route::get('/admin/login', function () {
    return view('admin/login');
});


