<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;

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
    return view('pages.home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/backend',function () {
    return view('pages.backend');
})->name('backend');


Route::resource('services', ServicesController::class);
Route::get('/backend', 'App\Http\Controllers\ServicesController@index');
Route::get('/backend/services/create', 'App\Http\Controllers\ServicesController@create');
Route::post('/backend/services/create', 'App\Http\Controllers\ServicesController@store');
Route::get('/backend/services/edit/{id}', 'App\Http\Controllers\ServicesController@edit');
Route::post('/backend/services/edit/{id}', 'App\Http\Controllers\ServicesController@update');
