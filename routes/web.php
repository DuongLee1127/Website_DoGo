<?php

use App\Http\Controllers\Ajax\StatusController;
use App\Http\Controllers\Ajax\LocationController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Middleware\AuthMiddle;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\PostController;

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
        Route::get('edit/{id}', [UserController::class, 'edit'])->where(['id' => '[0-9]+'])->name('admin.user.edit');
        Route::post('edit/{id}', [UserController::class, 'update'])->where(['id' => '[0-9]+'])->name('admin.user.update');
        Route::post('delete/{id}', [UserController::class, 'delete'])->where(['id' => '[0-9]+'])->name('admin.user.delete');
        //ajax
        Route::get('ajax/districts', [LocationController::class, 'districts'])->name('ajax.districts');
        Route::get('ajax/ward', [LocationController::class, 'ward'])->name('ajax.ward');
        Route::get('edit/ajax/districts', [LocationController::class, 'districts'])->name('ajax.districts');
        Route::get('edit/ajax/ward', [LocationController::class, 'ward'])->name('ajax.ward');


    });
    Route::post('ajax/status', [StatusController::class, 'status']);

    Route::prefix('/post')->group(function(){
        Route::get('/', [PostController::class, 'index'])->name('admin.post');
        Route::get('create', [PostController::class, 'create'])->name('admin.post.create');
        Route::post('store', [PostController::class, 'store'])->name('admin.post.store');
        Route::get('edit/{id}', [PostController::class, 'edit'])->where(['id' => '[0-9]+'])->name('admin.post.edit');
        Route::post('edit/{id}', [PostController::class, 'update'])->where(['id' => '[0-9]+'])->name('admin.post.update');
        Route::post('delete/{id}', [PostController::class, 'delete'])->where(['id' => '[0-9]+'])->name('admin.post.delete');
    });
});


Route::get('filemanager', function () {
    return view('filemanager.index');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
