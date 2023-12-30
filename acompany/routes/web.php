<?php

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\LandingPageController;
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
//Route Fix Jangan dirubah ya ges yak - caca
Route::get('sales', [SalesController::class, 'index'])->name('sales');
Route::get('products', [ProductsController::class, 'index'])->name('products');
Route::get('customers', [CustomersController::class, 'index'])->name('customers');
Route::get('/', [LandingPageController::class, 'index'])->name('landingPage');

//Yang ini boleh dirubah
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/signIn', function () {
    return view('signIn');
})->name('signIn');