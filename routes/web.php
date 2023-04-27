<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// ログイン画面表示
Route::get('/',[ListController::class,'signin'])->name('signin');
Route::get('signin',[ListController::class,'signin'])->name('signin');

// 新規登録画面
Route::get('signup',[ListController::class,'signup'])->name('signup');

// パスワード再設定メール送信画面
// postに変更する
Route::get('forget_pw',[ListController::class,'forget_pw'])->name('forget_pw');

// パスワード再設定画面
// postに変更する
Route::get('reset_pw',[ListController::class,'reset_pw'])->name('reset_pw');
