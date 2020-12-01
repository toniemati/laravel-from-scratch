<?php

use Illuminate\Support\Facades\Auth;
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

Route::view('/', 'home');

Route::get('/contact', 'App\Http\Controllers\ContactController@create')->name('contact.create');
Route::post('/contact', 'App\Http\Controllers\ContactController@store')->name('contact.store');


Route::view('/about', 'about');

Route::resource('/customers', 'App\Http\Controllers\CustomerController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);;
