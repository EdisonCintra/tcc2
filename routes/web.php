<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('home');


//Route::get('/', [CustomerController::class, 'index'])->name('customer.index');


Route::get('/customers', [CustomerController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('customers');

Route::get('/newCustomer', [CustomerController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('newCustomer');


Route::post('/store-customer', [CustomerController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('storeCustomer');






Route::get('/orders', function () {
    return view('orders');
})->middleware(['auth', 'verified'])->name('orders');

Route::get('/products', function () {
    return view('products');
})->middleware(['auth', 'verified'])->name('products');

Route::get('/reports', function () {
    return view('reports');
})->middleware(['auth', 'verified'])->name('reports');

Route::get('/catalog', function () {
    return view('catalog');
})->middleware(['auth', 'verified'])->name('catalog');

Route::get('/newProduct', function () {
    return view('newProduct');
})->middleware(['auth', 'verified'])->name('newProduct');

Route::get('/newOrder', function () {
    return view('newOrder');
})->middleware(['auth', 'verified'])->name('newOrder');

Route::get('/graphic', function () {
    return view('graphic');
})->middleware(['auth', 'verified'])->name('graphic');

Route::get('/editProduct', function () {
    return view('editProduct');
})->middleware(['auth', 'verified'])->name('editProduct');

Route::get('/editCustomer', function () {
    return view('editCustomer');
})->middleware(['auth', 'verified'])->name('editCustomer');

Route::get('/editOrder', function () {
    return view('editOrder');
})->middleware(['auth', 'verified'])->name('editOrder');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
