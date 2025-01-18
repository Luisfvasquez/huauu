<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class);
Route::resource('admin', AdminController::class);
Route::view('/principal','admin.principal')->name('pricipal');

Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');


Route::post('/login', [SesionController::class, 'login'])->name('login');
Route::get('/login', [SesionController::class, 'showLogin']);
Route::get('/logout', [SesionController::class, 'logout'])->name('logout');

Route::view('/compra', 'admin.compra');