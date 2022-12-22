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


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'PropertyController@index');
Route::get('property/store', 'PropertyController@store');
// Route::get('image-view', 'ImageController@index');
// Route::post('image-submit', 'ImageController@store');