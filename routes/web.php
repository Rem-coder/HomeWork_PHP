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
    return view('start_page');
}) -> name('home');

Route::get('/inside', function () {
    return view('inside');
}) -> name('inside');

Route::get('/registration', function () {
    return view('registration');
}) -> name('registration');

Route::post('/registration/submit', 'App\Http\Controllers\RegController@Submit') -> name('registration-form');

