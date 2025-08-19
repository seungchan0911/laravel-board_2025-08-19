<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BoardController;

Route::view('/', 'index')->name('index');

Route::get('register', [AuthController::class, 'showRegister'])->name('register');
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::get('board', [BoardController::class, 'showBoard'])->name('board');
Route::get('board/create', [BoardController::class, 'showCreate'])->name('create');

Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('board/create', [BoardController::class, 'create'])->name('create');