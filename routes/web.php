<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\MainNewsController;
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

Route::get('/', [DataController::class,'fetchData'])->name('welcome');
Route::get('/datenschutzerklärung', function () {
    return view('Datenschutz.datenschutzerklärung');
})->name('Datenschutz');
Route::get('/allgemeine', function () {
    return view('Datenschutz.allgemeine');
})->name('Allgemeine');


Route::get('/wetter', [WeatherController::class,'getWeather'])->name('wetter');
Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout'); 
});

Route::controller(MainNewsController::class)->group(function() {
    Route::get('/news', 'news')->name('News');
    Route::get('/businuss', 'businuss')->name('Business');
    Route::get('/gesundheit', 'gesundheit')->name('Gesundheit');
    Route::get('/politik', 'politik')->name('Politik');
    Route::get('/reise', 'reise')->name('Reise');
    Route::get('/kochen', 'kochen')->name('Kochen');
    Route::get('/sport', 'sport')->name('Sport');
    Route::get('/video', 'video')->name('Video');
    Route::get('/wetter', 'wetter')->name('Wetter');
    Route::get('/ticker', 'ticker')->name('ticker');

});



/* 
Route::get('/register', function () {return view('');})->name('register');
Route::get('/login', function () {return view('');})->name('login'); */
