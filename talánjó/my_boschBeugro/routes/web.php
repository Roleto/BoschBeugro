<?php

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

Route::get('/production', [App\Http\Controllers\HomeController::class, 'production'])->name('production');
Route::get('/destroy/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('destroy');
Route::get('/center', [App\Http\Controllers\HomeController::class, 'center'])->name('center');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
