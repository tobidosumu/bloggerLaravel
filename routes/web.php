<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;

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

Route::redirect('/', '/posts');

Route::get('/posts', function () {
    return view('posts.index');
})->name('posts.index');

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::resource('/posts', PostsController::class);

Route::get('index', [CustomAuthController::class, 'posts.index']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard']);
    Route::get('category', [AdminController::class, 'category']);
    Route::get('seller', [AdminController::class, 'seller']);
    Route::get('product', [AdminController::class, 'product']);
    Route::get('user', [AdminController::class, 'user']);
    Route::get('report', [AdminController::class, 'report']);
});

Route::resource('/category', CategoryController::class);

require __DIR__.'/auth.php';
