<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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
Route::view('/', 'pages.index');
Route::view('/web', 'pages.web');

Route::resource('posts', PostsController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::post('/', [PagesController::class, 'index']);
//Route::view('/post', 'welcome');
//Route::view('/post', [PagesController::class, 'post']);
//Route::get('/web', function () {
  //return view ('posts/index');
//});
