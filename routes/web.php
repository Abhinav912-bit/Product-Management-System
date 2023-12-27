<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::group(['midderlware' => ('auth')], function(){

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    // Resource routes for ProductController
    Route::resource('products', ProductController::class);
    Route::get('products', [ProductController::class, 'listing'])->name('products.listing');

    // Resource routes for CategoryController
    Route::resource('categories', CategoryController::class);
});