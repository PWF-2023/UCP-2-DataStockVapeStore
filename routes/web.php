<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StockController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/stock', [StockController::class, 'index'])->name('stock.index');
    Route::post('/stock', [StockController::class, 'store'])->name('stock.store');
    Route::get('/stock/create', [StockController::class, 'create'])->name('stock.create');
    Route::get('/stock/{stock}/edit', [StockController::class, 'edit'])->name('stock.edit');
    Route::patch('/stock/{stock}', [StockController::class, 'update'])->name('stock.update');
    Route::patch('/stock/{stock}/complete', [StockController::class, 'complete'])->name('stock.complete');
    Route::patch('/stock/{stock}/incomplete', [StockController::class, 'uncomplete'])->name('stock.uncomplete');
    Route::delete('/stock/{stock}', [StockController::class, 'destroy'])->name('stock.destroy');
    Route::delete('/stock', [StockController::class, 'destroyCompleted'])->name('stock.deleteallcompleted');

    Route::resource('/category', CategoryController::class);

    Route::middleware('admin')->group(function () {
        Route::get('/user', [UserController::class, 'index'])->name('user.index');
        Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    });
});

require __DIR__.'/auth.php';
