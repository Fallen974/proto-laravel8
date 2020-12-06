<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\UserController;
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
Route::get('/backend/services', 'App\Http\Controllers\ServicesController@index');
Route::get('/backend/services/create', 'App\Http\Controllers\ServicesController@create');
Route::post('/backend/services/create', 'App\Http\Controllers\ServicesController@store');
Route::get('/backend/services/edit/{id}', 'App\Http\Controllers\ServicesController@edit');
Route::post('/backend/services/edit/{id}', 'App\Http\Controllers\ServicesController@update');

Route::resource('members', CrewController::class);
Route::get('/backend/crew', 'App\Http\Controllers\CrewController@index');
Route::get('/backend/crew/create', 'App\Http\Controllers\CrewController@create');
Route::post('/backend/crew/create', 'App\Http\Controllers\CrewController@store');
Route::get('/backend/crew/edit/{id}', 'App\Http\Controllers\CrewController@edit');
Route::post('/backend/crew/edit/{id}', 'App\Http\Controllers\CrewController@update');

Route::resource('users', UserController::class);
Route::get('/backend/users', 'App\Http\Controllers\UserController@index');
Route::get('/backend/users/create', 'App\Http\Controllers\UserController@create');
Route::post('/backend/users/create', 'App\Http\Controllers\UserController@store');
Route::get('/backend/users/edit/{id}', 'App\Http\Controllers\UserController@edit');
Route::post('/backend/users/edit/{id}', 'App\Http\Controllers\UserController@update');

Route::get('/', 'App\Http\Controllers\CrewController@getdb');

