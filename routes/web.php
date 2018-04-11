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
    return view('home');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('about', function () {
    return view('about');
});

Route::get('/logout', function() {
    Auth::logout();
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/recipe-detail/{id}/', 'HomeController@viewRecipe');
Route::get('/favorite/{id}/', 'HomeController@favoriteRecipe');
Route::get('/settings', 'HomeController@userInfo');
Route::post('/settingSave', 'HomeController@saveUser');
Route::get('/profile', 'HomeController@showUser')->name('profile');
