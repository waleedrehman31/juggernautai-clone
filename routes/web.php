<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::view('/', 'frontend.index');
Route::view('/about', 'frontend.about')->name('frontend.about');
Route::view('/pricing', 'frontend.pricing')->name('frontend.pricing');
Route::view('/blog', 'frontend.blog')->name('frontend.blog');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
