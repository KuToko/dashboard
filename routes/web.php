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

Route::get('/', [\App\Http\Controllers\WebController::class, 'index'])->name('landing.index');
Route::get('/privacy', [\App\Http\Controllers\WebController::class, 'privacy'])->name('landing.privacy');
Route::get('/contact', [\App\Http\Controllers\WebController::class, 'contact'])->name('landing.contact');
