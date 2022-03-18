<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckSession;

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

Route::get('/login', 'LoginController@login')->name('login');

Route::post('/login', 'LoginController@autenticar')->name('login');

Route::middleware('checksession')->prefix('/app')->group(function() {
    Route::get('/default', 'DefaultController@default')->name('default');
    

});
