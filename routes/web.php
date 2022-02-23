<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
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
})->name('home');

Route::get('/index', function () {
    return view('index');
})->name('index');


Route::get('/redirects', [HomeController::class,"index"]);

Route::post('/addseller', [HomeController::class,"addseller"]);

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 
[HomeController::class,"index"])->name('dashboard');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
