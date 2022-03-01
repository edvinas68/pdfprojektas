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

Route::get('/idarbinimas', function () {
    return view('idarbinimas');
})->name('idarbinimas');

Route::get('/atleidimas', function () {
    return view('atleidimas');
})->name('atleidimas');

Route::get('/AP_atostogos', function () {
    return view('AP_atostogos');
})->name('Apmokamos atostogos');

Route::get('/NE_atostogos', function () {
    return view('NE_atostogos');
})->name('Neapmokamos atostogos');


Route::get('/vaiko_atostogos', function () {
    return view('vaiko_atostogos');
})->name('Vaiko priežiūros atostogos');

Route::get('/pravaikstos', function () {
    return view('pravaikstos');
})->name('Pravaikštos');

Route::get('/komandiruote', function () {
    return view('komandiruote');
})->name('Komandiruotė');

Route::get('/priedai', function () {
    return view('priedai');
})->name('Priedai');

Route::get('/ds_keitimas', function () {
    return view('ds_keitimas');
})->name('Darbo sąlygų keitimas');





Route::get('/redirects', [HomeController::class,"index"]);

Route::post('/addseller', [HomeController::class,"addseller"]);

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 
[HomeController::class,"index"])->name('dashboard');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
