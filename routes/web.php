<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//
Route::get('/about', 'pagesController@about');
Route::get('/contact','pagesController@contact');
Route::get('/', 'pagesController@index');
Route::get('/articles/{params}', [Pages::class, 'show']);
// Route::get('/', 'pagesController@index');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
