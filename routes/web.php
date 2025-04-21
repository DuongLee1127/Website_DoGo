<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Middleware\AuthMiddle;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

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
        return view('admin.product');
    })->name('admin.product');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
