<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

Route::get('index', 'Api/PagesController@index');

Route::get('bagian1', 'Api/PagesController@bagian1');

Route::get('bagian2', 'Api/PagesController@bagian2');

Route::get('bagian3', 'Api/PagesController@bagian3');