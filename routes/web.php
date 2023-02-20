<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CustomAuthController;

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


Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('admin/category', function () {
    return view('admin.category');
});

Route::get('admin/seller', function () {
    return view('admin.seller');
});

Route::get('admin/product', function () {
    return view('admin.product');
});

Route::get('admin/user', function () {
    return view('admin.user');
});

Route::get('admin/report', function () {
    return view('admin.report');
});

require __DIR__.'/auth.php';
