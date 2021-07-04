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

Route::get('/fill-from', function () {
    return view('register-form-1');
});
// Route::get('/test', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});
Route::get('/contact-us', function () {
    return view('pContactUs');
});
Route::get('/about-us', function () {
    return view('pAboutUs');
});
Route::get('/doctors-profile', function () {
    return view('pDoctorsProfile');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
