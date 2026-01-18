<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth')->group(
    function () {

        Route::get('/', [AuthController::class, 'index']);      // 入力画面

        Route::post('/confirm', [ContactController::class, 'confirm']); // 確認画面

        Route::post('/thanks', [ContactController::class, 'store']);    // 送信処理


        Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

        Route::get('/search', [AdminController::class, 'search'])->name('admin.search');

        Route::get('/reset', [AdminController::class, 'reset'])->name('admin.reset');

        Route::post('/delete', [AdminController::class, 'delete'])->name('admin.delete');

        Route::get('/export', [AdminController::class, 'export'])->name('admin.export');
    }

);
