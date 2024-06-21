<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\userController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\kategoriController;
use GuzzleHttp\Middleware;

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('register', [AuthController::class, 'viewRegister'])->name('register');
Route::post('prosesregister', [AuthController::class, 'register']);


Route::prefix('admin')->middleware('role:admin')->group(function () {
    Route::get('/dashboard', function () {
        $totalProducts = DB::table('tbbarang')->count();
        // dd($totalProducts);
        return view('admin.layouts.dashboard')
            ->with('title', 'Dashboard')
            ->with('totalProducts', $totalProducts);
    });
    Route::resource('product', barangController::class);
    Route::patch('/update-status/{id}', [barangController::class, 'updateStatus'])->name('updateStatus');
    Route::resource('category', kategoriController::class);
});

Route::get('/error', function () {
    return view('user.layouts.error');
});

Route::get('', [userController::class, 'index'])->name('root');

Route::get('contact', [userController::class, 'contact']);

Route::get('detail/{id}', [userController::class, 'detailProduct'])->name('detailProduct');

Route::get('kategori/{id}', [userController::class, 'kategori'])->name('kategori');

Route::get('/filter-barang', [userController::class, 'filterBarang'])->name('filter.barang');

Route::get('cart', [userController::class, 'cart'])->name('cart')->middleware('auth');

Route::get('addToCart/{id}', [userController::class, 'addToCart'])->name('addToCart')->middleware('auth');

Route::delete('/delete-cart-product/{id}', [UserController::class, 'deleteCart'])->name('delete.cart.product')->middleware('auth');

Route::get('checkout', [checkoutController::class, 'checkout'])->name('checkout')->middleware('auth');

Route::post('/checkout', [checkoutController::class, 'prosescheckout']);

Route::get('/checkout/detail', [userController::class, 'checkoutDetail']);

Route::get('/invoice', [userController::class, 'invoice']);
