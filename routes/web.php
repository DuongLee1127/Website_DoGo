<?php

use App\Http\Controllers\Ajax\LocationController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Middleware\AuthMiddle;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;

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
    Route::get('/', function () {
        return view('client.home');
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

    //
    Route::get('/product', function(){
        return view('admin.product.product');
    })->name('admin.product');

    //Users
    Route::prefix('/user')->group(function(){
        Route::get('/', [UserController::class, 'index'])->name('admin.user');
        Route::get('create', [UserController::class, 'create'])->name('admin.user.create');
        Route::post('store', [UserController::class, 'store'])->name('admin.user.store');
    });

    //ajax
    Route::get('user/ajax/districts', [LocationController::class, 'districts'])->name('user.ajax.districts');
    Route::get('user/ajax/ward', [LocationController::class, 'ward'])->name('user.ajax.ward');


});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
