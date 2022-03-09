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
//----------------------------------------------MAIN----------------------------------------------------------
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/index', function () {
    return view('index');
})->name('index');


//---------------------------------------------------PASIRINKIMAI---------------------------------------------------------------
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

//------------------------------------------------------------ATLEIDIMAS--------------------------------------------
Route::get('/54', function () {
    return view('54');
})->name('Atleidimas pagal 54 str.');

Route::get('/55', function () {
    return view('55');
})->name('Atleidimas pagal 55 str.');

Route::get('/56', function () {
    return view('56');
})->name('Atleidimas pagal 56 str.');

Route::get('/57', function () {
    return view('57');
})->name('Atleidimas pagal 57 str.');

Route::get('/58', function () {
    return view('58');
})->name('Atleidimas pagal 58 str.');

Route::get('/59', function () {
    return view('59');
})->name('Atleidimas pagal 59 str.');

Route::get('/vaiko_priez_ats', function () {
    return view('vaiko_priez_ats');
})->name('Vaiko priežiūros atostogos');

Route::get('/tevystes_ats', function () {
    return view('tevystes_ats');
})->name('Tėvystės atostogos');

Route::get('/provaikstos', function () {
    return view('provaikstos');
})->name('Provaikštos/Pasiaiškinimas');

Route::get('/direktorius_komandiruote', function () {
    return view('direktorius_komandiruote');
})->name('Direktoriaus komandiruotė');

Route::get('/darbuotojas_komandiruote', function () {
    return view('darbuotojas_komandiruote');
})->name('Darbuotojo komandiruotė');






Route::get('/redirects', [HomeController::class,"index"]);

Route::post('/addseller', [HomeController::class,"addseller"]);

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 
[HomeController::class,"index"])->name('dashboard');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
