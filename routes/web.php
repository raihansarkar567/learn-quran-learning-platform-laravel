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
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/frontend/home', 'FrontendController@index')->name('frontend.home');


Route::group(['middleware' => ['auth']], function () {

	Route::get('/home', 'HomeController@index')->name('home');


	Route::resource('admin/makharij', 'Admin\\MakharijController');
	Route::resource('admin/alphabet', 'Admin\\AlphabetController');
	Route::resource('admin/vowel', 'Admin\\VowelController');
	Route::resource('admin/letter_formation', 'Admin\\LetterFormationController');


});
