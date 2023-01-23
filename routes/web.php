<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookAuthController;
use App\Http\Controllers\BookController;
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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'HomeController@logout');


// Author route
Route::resource('book-author', 'BookAuthController');

Route::get('/trashed-data',[BookAuthController::class,'trashed'])->name('trashedData');
Route::get('/restor-data/{id}',[BookAuthController::class,'restore'])->name('restoreData');
Route::delete('/deleteParmanet-data/{id}',[BookAuthController::class,'deleteParmanet'])->name('deleteParmanet');


// Books detaills route
Route::resource('allbooks-type', 'BookController');



