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
    Route::get('/news', 'news')->name('news');
    Route::get('/businuss', 'businuss')->name('businuss');
    Route::get('/gesundheit', 'gesundheit')->name('gesundheit');
    Route::get('/politik', 'politik')->name('politik');
    Route::get('/reise', 'reise')->name('reise');
    Route::get('/sport', 'sport')->name('sport');
    Route::get('/video', 'video')->name('video');
    Route::get('/wetter', 'wetter')->name('wetter');

});



/* 
Route::get('/register', function () {return view('');})->name('register');
Route::get('/login', function () {return view('');})->name('login'); */
