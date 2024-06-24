<?php

use Illuminate\Support\Facades\Route;
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

// 商品一覧表示
Route::get('/products',[ProductController::class,'showIndex']);

// 商品登録ページ表示
Route::get('/products/register',[ProductController::class,'showRegister']);

// 商品登録機能
Route::post('/products/register', [ProductController::class, 'store']);

// 商品詳細ページ表示
Route::get('/products/{product_id}',[ProductController::class, 'showDetail']);


// 商品更新機能
Route::post('/products/{product_id}/update', [ProductController::class, 'update']);

// 検索機能

// 並べ替え機能