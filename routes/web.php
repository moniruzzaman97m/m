<?php

use GuzzleHttp\Middleware;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\DashboardController::class, 'index']);




// // Admin Panel Routes
// Route::group([ 'as' => 'admin.', 'prefix' => 'admin','namespace' => 'Admin', 'middleware' =>['auth','admin'] ], function () {
//     Route::get('dashboard','DashboardController@index')->name('dashboard');


//  });

//  Route::group([ 'as' => 'user.', 'prefix' => 'user','namespace' => 'user', 'middleware' =>['auth','user'] ], function () {
//     Route::get('dashboard','DashboardController@index')->name('dashboard');


//  });

