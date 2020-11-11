<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Controllers\PagesController;
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

Route::get('/', 'PagesController@welcome');

// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/Bagian1', function () {
//     return view('/Bagian1');
// });

// Route::get('/Bagian2', function () {
//     return view('/Bagian2');
// });

// Route::get('/Bagian3', function () {
//     return view('/Bagian3');
// });

Route::get('home', 'App\Http\Controllers\PagesController@home');

Route::get('/bagian1', 'App\Http\Controllers\PagesController@bagian1');


Route::get('/bagian2', 'App\Http\Controllers\bagian2Controller@index');


Route::get('/bagian3', 'App\Http\Controllers\PagesController@bagian3');

//Books

Route::get('/books', 'App\Http\Controllers\BooksController@index');

// Route::get('/books/{book}', 'App\Http\Controllers\BooksController@show');

Route::get('books/{book}', [BooksController::class, 'show']);