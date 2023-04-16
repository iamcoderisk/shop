<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [CartController::class, 'index']);  
Route::get('/shopping-cart', [CartController::class, 'bookCart'])->name('shopping.cart');
Route::get('/book/{id}', [CartController::class, 'addBooktoCart'])->name('addbook.to.cart')->withoutMiddleware(['auth']);
Route::patch('/update-shopping-cart', [CartController::class, 'updateCart'])->name('update.sopping.cart');
Route::delete('/delete-cart-product', [CartController::class, 'deleteProduct'])->name('delete.cart.product');