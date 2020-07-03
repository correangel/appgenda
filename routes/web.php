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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('home/categories', 'CategoryController@index')->name('categories');

Route::get('home/categories/{category}/services', 'ServiceController@index');

Route::get('home/categories/{category}/services/{service}', 'ScheduleController@index');

Route::get('confirmation/{service}/{employee}/{date}/{start}', 'ConfirmationController@index');

Route::get('schedule/store/{service}/{employee}/{date}/{start}/{duration}', 'BookingController@store');