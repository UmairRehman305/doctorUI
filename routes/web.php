<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InsertCoursController;
use App\Http\Controllers\InsertPublicationController;
use App\Http\Controllers\InsertConfrenceController;
use App\Http\Controllers\personalInformationController;
use App\Http\Controllers\searchProfileController;
use App\Http\Controllers\dashboardController;




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

// Route::get('/fill-from', function () {
//     return view('register-form-1');
// });

Route::get('/fill-from' , 'userFormMiddlewareController@router');

Route::post('submitUserForm' , 'submitUserForm@submit');

Route::get('search' , 'searchProfileController@search');


Route::get('/', function () {
    return view('index');
});
Route::get('/contact-us', function () {
    return view('pContactUs');
});
Route::get('/about-us', function () {
    return view('pAboutUs');
});

Route::get('/dashboard', 'dashboardController@get');


Route::get('/doctors-profile', 'doctorProfileCotroller@getProfile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::Post('/insert-course', 'InsertCoursController@insert');

Route::get('/delete-course/{formID}', 'InsertCoursController@delete');

Route::post('/edit-course', 'InsertCoursController@edit');

Route::get('/archive-profile/{userID}', 'dashboardController@archive');

Route::get('/delete-publication/{formID}', 'InsertPublicationController@delete');

Route::get('/delete-confrence/{formID}', 'InsertConfrenceController@delete');

Route::Post('/insert-publication', 'InsertPublicationController@insert');

Route::Post('/insert-confrence', 'InsertConfrenceController@insert');

Route::get ('/detail-page/{userID}' , 'ViewProfileController@detail');

Route::get ('/view-profile' , 'ViewProfileController@index');

Route::post ('/edit-personal-information' , 'personalInformationController@update');
