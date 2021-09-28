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

Route::get('/site/index', 'App\Http\Controllers\ticketController@index')->name('app.index');

Route::get('/app/tickets', 'App\Http\Controllers\ticketController@all')->name('app.ticket');



Route::get('/login/{erro?}', 'App\Http\Controllers\loginController@index')->name('site.login');
Route::post('/login', 'App\Http\Controllers\loginController@autenticar')->name('site.login');
