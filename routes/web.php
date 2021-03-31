<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

// Route::get('/home', [HomeController::class, 'home'])->name('home');
// Route::view('welcome', 'home');

Route::get('welcome/{name}',[HomeController::class,'welcome']);

Route::get('home', [HomeController::class, 'login'])->name('home');
