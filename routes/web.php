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
use App\Http\Controllers\InvoiceController;
use App\Livewire\TableOne;
use App\Models\Product;
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
    $products  = Product::with('category')->get();
    return view('welcome', compact('products'));
});

Route::middleware(['auth'])->group(function () {

    Route::resource('users', UserController::class);
    Route::resource('admin', AdminController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('suplier', SuplierController::class);
    Route::resource('payment_method', Payment_methodController::class);
    Route::resource('buy', BuyProductController::class);
    Route::resource('invoice', InvoiceController::class);
    Route::get('/showbuy', [BuyProductController::class, 'showAll'])->name('showbuy');
    Route::resource('inventory', InventoryController::class);
    Route::view('/principal', 'admin.principal')->name('principal');

    Route::view('/compra', 'admin.compra');
});

Route::post('/login', [SesionController::class, 'login'])->name('login');


Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::get('/login', [SesionController::class, 'showLogin']);
Route::get('/logout', [SesionController::class, 'logout'])->name('logout');
