<?php

use App\Http\Controllers\Ajax\StatusController;
use App\Http\Controllers\Ajax\LocationController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Client\AuthController as UserAuthController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Vnpay\VnpayController;
use App\Http\Middleware\AuthMiddle;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;

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
Route::prefix('client')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('client');
    Route::get('/shop', [HomeController::class, 'product'])->name('client.product');
    Route::get('/detail', [HomeController::class, 'detail'])->name('client.detail');

    // auth

    Route::post('/dologin', [UserAuthController::class, 'doLogin'])->name('client.dologin');
    Route::get('/logout', [AuthController::class, 'logout'])->name('client.login.logout');
    Route::prefix('vnpay')->group(function(){
        Route::get('/payment', [VnpayController::class, 'vnpay_payment'])->name('client.vnpay.payment');
        Route::get('/return', [VnpayController::class, 'vnpayReturn'])->name('client.vnpay.return');
    });
});

Route::middleware(AuthMiddle::class)->prefix('admin')->group(function(){
    //login
    Route::withoutMiddleware(AuthMiddle::class)->prefix('/login')->group(function(){
        Route::get('/logout', [AuthController::class, 'logout'])->name('admin.login.logout');
        Route::get('/', [AuthController::class, 'index'])->name('admin.login');
        Route::post('/dologin', [AuthController::class, 'doLogin'])->name('admin.login.dologin');
    });

    Route::get('/', [DashboardController::class, 'index'])->name('admin');
    Route::post('/', [AuthController::class, 'doLogin'])->name('admin');

    //Users
    Route::prefix('/user/')->group(function(){
        Route::get('/{role}', [UserController::class, 'index'])->name('admin.user.role');

        Route::get('{role}/create', [UserController::class, 'create'])->name('admin.user.create');
        Route::post('/{role}/store', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('{role}/edit/{id}', [UserController::class, 'edit'])->where(['id' => '[0-9]+'])->name('admin.user.edit');
        Route::post('{role}/edit/{id}', [UserController::class, 'update'])->where(['id' => '[0-9]+'])->name('admin.user.update');
        Route::post('{role}/delete/{id}', [UserController::class, 'delete'])->where(['id' => '[0-9]+'])->name('admin.user.delete');
        //ajax
        Route::get('ajax/districts', [LocationController::class, 'districts'])->name('ajax.districts');
        Route::get('ajax/ward', [LocationController::class, 'ward'])->name('ajax.ward');
        Route::get('edit/ajax/districts', [LocationController::class, 'districts'])->name('ajax.districts');
        Route::get('edit/ajax/ward', [LocationController::class, 'ward'])->name('ajax.ward');


    });
    Route::post('{role}/ajax/status', [StatusController::class, 'status']);

    // post
    Route::prefix('/post')->group(function(){
        Route::get('/', [PostController::class, 'index'])->name('admin.post');
        Route::get('create', [PostController::class, 'create'])->name('admin.post.create');
        Route::post('store', [PostController::class, 'store'])->name('admin.post.store');
        Route::get('edit/{id}', [PostController::class, 'edit'])->where(['id' => '[0-9]+'])->name('admin.post.edit');
        Route::post('edit/{id}', [PostController::class, 'update'])->where(['id' => '[0-9]+'])->name('admin.post.update');
        Route::post('delete/{id}', [PostController::class, 'delete'])->where(['id' => '[0-9]+'])->name('admin.post.delete');
    });

    // product
    Route::prefix('/product')->group(function(){
        Route::get('/', [ProductController::class, 'index'])->name('admin.product');
        Route::get('create', [ProductController::class, 'create'])->name('admin.product.create');
        Route::post('store', [ProductController::class, 'store'])->name('admin.product.store');
        Route::get('edit/{id}', [ProductController::class, 'edit'])->where(['id' => '[0-9]+'])->name('admin.product.edit');
        Route::post('edit/{id}', [ProductController::class, 'update'])->where(['id' => '[0-9]+'])->name('admin.product.update');
        Route::post('delete/{id}', [ProductController::class, 'delete'])->where(['id' => '[0-9]+'])->name('admin.product.delete');
    });
});


Route::get('filemanager', function () {
    return view('filemanager.index');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
