<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;


Route::get('/', [MainController::class, 'login'])->name('login');
Route::post('/', [AuthController::class, 'handle_login'])->name('login.process');
Route::get('/manage_users', [MainController::class, 'manage_users'])->name('users');
Route::get('/add_user', [AuthController::class, 'add_user'])->name('add_user');
Route::post('/add_user', [AuthController::class, 'handle_add_user'])->name('add_user.process');
Route::get('/edit_user/{id}', [AuthController::class, 'edit_user'])->name('edit_user');
Route::post('/edit_user/{id}', [AuthController::class, 'handle_edit_user'])->name('edit_user.process');
Route::get('/delete/{id}', [MainController::class, 'delete'])->name('delete_user');
Route::get('/logout', [MainController::class, 'logout'])->name('logout');