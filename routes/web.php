<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    */


    Route::get('/', [HomeController::class, 'home'])->name('home');

    /*
   |--------------------------------------------------------------------------
   | User Routes
   |--------------------------------------------------------------------------
   */

    Auth::routes();
    Route::get('/account', [UserController::class, 'account'])->name('account');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');


    /*
    |--------------------------------------------------------------------------
    | Admin Panel Routes
    |--------------------------------------------------------------------------
    */

    Route::get('/adminlogin', [LoginController::class, 'login'])->name('admin.login');
    Route::post('/adminlogin', [LoginController::class, 'do_login'])->name('admin.login');
    Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::get('/adminpanel', [AdminController::class, 'dashboard'])->name('admin.dashboard');
