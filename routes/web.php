<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',[\App\Http\Controllers\PageController::class, 'index'])->name('index');
Route::post('/question/send',[\App\Http\Controllers\QuestionController::class, 'store'])->name('send.question');

//Route::middleware(['auth'])->group(function (){
//    Route::prefix('admin')->group(function (){
//        Route::get('/login',[\App\Http\Controllers\UserController::class, 'login'])->name('user.login');
//        Route::resource('/question',\App\Http\Controllers\QuestionController::class);
//    });
//});

Route::prefix('admin')->group(function (){
    Route::get('/login',[\App\Http\Controllers\UserController::class, 'login'])->name('user.login');
    Route::get('/dashboard',[\App\Http\Controllers\QuestionController::class,'dashboard'])->name('dashboard');
    Route::resource('/question',\App\Http\Controllers\QuestionController::class);
});
