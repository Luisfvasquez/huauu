<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\Payment_methodController;
use App\Http\Controllers\InventoryController;

use App\Http\Controllers\BuyProductController;
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
Route::resource('category', CategoryController::class);
Route::resource('suplier', SuplierController::class);
Route::resource('payment_method', Payment_methodController::class);
Route::resource('buy', BuyProductController::class);
Route::get('/showbuy', [BuyProductController::class, 'showAll']);
Route::resource('inventory', InventoryController::class);

Route::post('/login', [SesionController::class, 'login'])->name('login');


Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::get('/login', [SesionController::class, 'showLogin']);
Route::get('/logout', [SesionController::class, 'logout'])->name('logout');

Route::view('/principal','admin.principal')->name('pricipal');
Route::view('/compra', 'admin.compra');