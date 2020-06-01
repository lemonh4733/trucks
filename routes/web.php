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

Route::get('/', 'HomeController@index')->name('home');

Route::get('truck&create','TruckController@create')->name('truck.create');
Route::post('truck/store','TruckController@store')->name('truck.store');
Route::get('trucks&update&id={truck}','TruckController@updateView')->name('truck.updateView');
Route::post('trucks/update/{truck}','TruckController@update')->name('truck.update');
Route::get('trucks/delete&id={truck}','TruckController@destroy')->name('truck.delete');

