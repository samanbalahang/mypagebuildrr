<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\thePublicController;
use App\Http\Controllers\admin\dashCounterController;
use App\Http\Controllers\admin\dashTemplatesController;
use App\Http\Controllers\admin\dashPostController;
use App\Http\Controllers\admin\dashMediaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [ThepublicController::class,"index"]);
Route::group(['prefix' => 'mainlara'],function(){
    Route::resource('/',dashCounterController::class);
    Route::resource('/tremplates',dashTemplatesController::class);
    Route::resource('/posts',dashPostController::class);
    Route::post('/dropMedia',[dashMediaController::class,"dropMedia"])->name('dropMedia');
    Route::post('/summer-note-media',[dashMediaController::class,"dropMedia"])->name('dropMedia');

});