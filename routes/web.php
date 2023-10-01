<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\posController;
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
    return view('home');
})->name('home');

Route::get('/gallery', function() {
    return view('gallery');
})->name('gallery');

Route::get('/faq', function() {
    return view('faq');
})->name('faq');

Route::get('/map', function() {
    return view('map');
})->name('map');

Route::get('/treasure', function() {
    return view('treasure');
})->name('treasure');

Route::get('/event', function() {
    return view('event');
})->name('event');

Route::get('/pos', function () {
    return view('pos');
});

Route::get('/regismlbb', function () {
    return view('regis-mlbb');
});

Route::post('/pos',[posController::class,'simpanData'])->name('simpan.data');

Route::post('/event', [EventController::class, 'hiddenSeminar'])->name('seminar.name');
Route::post('/event', [EventController::class, 'simpanData'])->name('seminar.registration');