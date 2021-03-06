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

Route::get('/registration', function () {
    return view('registration');
}) -> name('registration');

Route::get('/inside', function () {
    return view('inside');
}) -> name('inside');

Route::post('/inside/authorization',
    'App\Http\Controllers\AuthorizationController@Authorization') -> name('inside-authorization');

Route::post('/registration/submit',
    'App\Http\Controllers\RegController@Submit') -> name('registration-form');

Route::get('inside/exit',
    'App\Http\Controllers\ExitController@Exit') -> name('exit-form');

Route::post('inside/add',
    'App\Http\Controllers\MessageAddController@Add') -> name('mess_add-form');

Route::get('inside/get',
    'App\Http\Controllers\MessageAddController@GetData') -> name('get-data');

Route::post('inside/delete',
    'App\Http\Controllers\MessageAddController@DeleteMessage') -> name('delete-message');
