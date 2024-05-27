<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;



Route::get('/', [AuthController::class, 'login'])->name('login.home');
Route::post('/login', [AuthController::class, 'loginpost'])->name('login.post');

Route::get('/register', [AuthController::class, 'register'])->name('register.home');
Route::post('/register', [AuthController::class, 'registerpost'])->name('register.post');


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard.home');
Route::get('/dashboard/addbook', [DashboardController::class, 'add'])->middleware(['auth'])->name('dashboard.add');

Route::post('/dashboard/add', [BookController::class, 'addbook'])->middleware(['auth'])->name('book.add');
