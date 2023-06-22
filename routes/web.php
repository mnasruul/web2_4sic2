<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login',[LoginController::class,"showLogin"])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,"cekLogin"]);

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard')->middleware('auth');


Route::get('/categories', [CategoryController::class, 'index'])->middleware('auth')->name('categories.index');
Route::get('/categories/1', [CategoryController::class, 'edit'])->middleware('auth')->name('categories.edit');
Route::get('/tags', [TagController::class, 'index'])->middleware('auth')->name('tags.index');
Route::get('/tags/1', [TagController::class, 'edit'])->middleware('auth')->name('tags.edit');
Route::post('/logout',LogoutController::class)->name('logout');

