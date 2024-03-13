<?php

use App\Http\Controllers\LoginController;
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

Route::view('/conteudo', 'conteudo');
Route::view('/login', 'admin.login')->name('login')->name('admin.login');
Route::post('/logar', [LoginController::class, 'logar'])->name('admin.logar');
Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');
