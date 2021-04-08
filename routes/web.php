<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


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

Route::get('index', [HomeController::class, 'index'])->name('index')->middleware('checktoken');

Route::get('create',[HomeController::class, 'create'])->name('create');

Route::post('login', [LoginController::class, 'login'])->middleware(['checkrole'])->name('post.login');

Route::get('check', [LoginController::class, 'create'])->middleware(['checklogin', 'checkrole'])->name('check');

Route::get('/', function(){
    $user = DB::table('users')->get();
    dd($user);
    return view('welcome');
});

Route::get('template', [HomeController::class, 'template'])->name('template');


