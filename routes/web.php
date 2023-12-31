<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController as AboutController;
use App\Http\Controllers\ServiceController as ServiceController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Customer\HomeController as CustomerHomeController;

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
})->name('welcome');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/service', [ServiceController::class, 'index'])->name('service');

Route::get('/customer-home', [CustomerHomeController::class, 'index'])->name('home-customer');

Route::get('/admin-home', [AdminHomeController::class, 'index'])->name('home-admin');
Route::get('/user', [AdminUserController::class, 'index'])->name('user');
Route::post('/user', [AdminUserController::class, 'store'])->name('user.add');
Route::put('/user/{user}', [AdminUserController::class, 'update'])->name('user.update');
Route::delete('/user/{user}', [AdminUserController::class, 'destroy'])->name('user.destroy');