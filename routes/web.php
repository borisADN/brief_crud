<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('admin.index');
//     // return bors;
// });

// other routes
Route::get('/', [MainController::class, 'login'])->name('login');
Route::get('/manage_users', [MainController::class, 'manage_users'])->name('users');

Route::post('/', [AuthController::class, 'handle_login'])->name('login.process');

Route::get('/add_user', [AuthController::class, 'add_user'])->name('add_user');
Route::post('/add_user', [AuthController::class, 'handle_add_user'])->name('add_user.process');

// Si un jour tout est efface dans la base de donnees 
// l'admin doit se connecter avec l'email edemwomagno@gmail.com 
// tres important

// identiiant actuels password 0000

Route::get('/edit_user/{id}', [AuthController::class, 'edit_user'])->name('edit_user');
Route::post('/edit_user/{id}', [AuthController::class, 'handle_edit_user'])->name('edit_user.process');
route::get('/delete/{id}', [MainController::class, 'delete'])->name('delete_user');
route::get('/logout', [MainController::class, 'logout'])->name('logout');







