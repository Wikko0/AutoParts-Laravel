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


Route::get('/', [HomeController::class, 'home']);

    /*
   |--------------------------------------------------------------------------
   | User Routes
   |--------------------------------------------------------------------------
   */

Auth::routes();
Route::get('/account', [UserController::class, 'account']);
Route::get('/logout', [UserController::class, 'logout']);


    /*
    |--------------------------------------------------------------------------
    | Admin Panel Routes
    |--------------------------------------------------------------------------
    */

Route::get('/adminlogin', [LoginController::class, 'login']);
Route::post('/adminlogin', [LoginController::class, 'do_login']);
Route::get('/adminpanel', [AdminController::class, 'dashboard']);
