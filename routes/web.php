<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
Route::resource('users', UserController::class);

Route::middleware('auth')->group(function(){
    Route::view('/conteudo', 'conteudo')->name('conteudo');
});

Route::view('/login', 'admin.login')->name('login');
Route::post('/logar', [LoginController::class, 'logar'])->name('admin.logar');
Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
Route::get('/register', [LoginController::class, 'create'])->name('admin.create');
