<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProjectController;
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

Route::get('/index',[ProjectController::class,'index'])->name('home');
Route::get('/products',[ProjectController::class,'products'])->name('products');
