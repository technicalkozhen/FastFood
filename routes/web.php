<?php

use App\Http\Controllers\public\product;
use App\Http\Controllers\publicController;
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

Route::middleware(['auth'])->group(function () {
    Route::get('/' , [publicController::class ,'index'])->name('public');
    Route::get('addProductToTable/{id}' , [publicController::class ,'addProductToTable'])->name('addProductToTable');
    Route::get('deleteProductToTable/{id}' , [publicController::class ,'deleteProductToTable'])->name('deleteProductToTable');
    Route::get('increaceNumberQuantity/{id}' , [publicController::class ,'increaceNumberQuantity'])->name('increaceNumberQuantity');
    Route::get('decreaceNumberQuantity/{id}' , [publicController::class ,'decreaceNumberQuantity'])->name('decreaceNumberQuantity');
    Route::get('invoice' , [publicController::class ,'invoice'])->name('invoice');
    Route::get('invoice_today' , [publicController::class ,'invoice_today'])->name('invoice_today');
    Route::get('showProduct/{id}' , [publicController::class ,'showProduct'])->name('showProduct');







    Route::resource('public/product', product::class)->except('show');


    
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
