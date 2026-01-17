<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;

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

Route::middleware('auth')->group(
    function () {

        Route::get('/', [AuthController::class, 'index']);      // 入力画面

        Route::post('/confirm', [ContactController::class, 'confirm']); // 確認画面

        Route::post('/thanks', [ContactController::class, 'store']);    // 送信処理

        Route::get('/', [AuthController::class, 'index']);
    }
);
