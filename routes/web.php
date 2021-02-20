<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\pagesController as Pages;
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

Route::get('/admins/home', function () {
    return view('welcome');
})->middleware('addheaders');
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth');

Route::get('/dashboard', 'DashboardController@index');
//
Route::get('/', 'pagesController@index');
Route::get('/articles/{slug}', 'pagesController@articles');
Route::get('/article/{slug}', 'pagesController@article');
Route::get('/about', 'pagesController@about');
Route::get('/contact','pagesController@contact');

Auth::routes();

Route::resource('admins', 'PostController');
