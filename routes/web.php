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
Route::get('/contact', 'StaticPagesController@contact');
Route::get('/offers', 'StaticPagesController@offers');

//Admin Dashbopard
Route::get('/admin', 'admin\AdminController@dashboard');

// Admin Users
Route::get('/admin/users', 'admin\UsersController@index') ;
Route::get('/admin/users/create', 'admin\UsersController@create');

Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit');
Route::put('/admin/users/{id}', 'admin\UsersController@update');
Route::get('/admin/users/create', 'admin\UsersController@create');
Route::post('/admin/users', 'admin\UsersController@store');
Route::put('/admin/users/{id}', 'admin\UsersController@update');
Route::delete('/admin/users/{id}/delete', 'admin\UsersController@delete');
// Admin Food Items
Route::get('/admin/food-items', 'admin\FoodItemsController@index');
Route::get('/admin/food-items/create', 'admin\FoodItemsController@create');
Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit');
Route::put('/admin/food-items/{id}', 'admin\FoodItemsController@update');
Route::delete('/admin/food-items/{id}/delete', 'admin\FoodItemsController@delete');


//Admin FoodCategories
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');
Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create');
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit');
Route::put('/admin/food-categories/{id}', 'admin\FoodCategoriesController@update');
Route::delete('/admin/food-categories/{id}/delete', 'admin\FoodCategoriesController@delete');


// Admin Customers
// Admin Members
Route::get('/admin/members', 'admin\MemberController@index');
Route::delete('/admin/members/{id}/delete', 'admin\MemberController@delete');

// Admin Reservations
Route::get('/admin/reservations', 'admin\ReservationController@index');
Route::delete('/admin/reservations/{id}/delete', 'admin\ReservationsController@delete');


//Admin Autentication
Route::get('/admin/register', function () {
    return view('admin/register');
});
Route::get('/admin/login', function () {
    return view('admin/login');
});


