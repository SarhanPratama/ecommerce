<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\kategoriController;

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('logout', [AuthController::class, 'logout']);

Route::prefix('admin')->group(function(){
    Route::get('/dashboard', function () {
        $totalProducts = DB::table('tbbarang')->count();
        // dd($totalProducts);
        return view('admin.layouts.dashboard')
        ->with('title', 'Dashboard')
        ->with('totalProducts', $totalProducts)
        ;
    });
    Route::resource('product', barangController::class);
    Route::resource('category', kategoriController::class);
});

    Route::get('', [userController::class, 'index'])->name('root');

    Route::get('detail/{id}', [userController::class, 'detailProduct'])->name('detailProduct');

    Route::get('kategori/{id}', [userController::class, 'kategori'])->name('kategori');

    Route::get('/filter-barang', [userController::class, 'filterBarang'])->name('filter.barang');

    Route::get('cart', [userController::class, 'cart'])->name('cart')->middleware('auth');

    Route::get('addToCart/{id}', [userController::class, 'addToCart'])->name('addToCart')->middleware('auth');

    Route::delete('/delete-cart-product/{id}', [UserController::class, 'deleteCart'])->name('delete.cart.product')->middleware('auth');






