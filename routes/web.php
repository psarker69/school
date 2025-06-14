<?php

use App\Http\Controllers\AdminLoginController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('site/auth/')->group(function(){

    Route::get('login',[AdminLoginController::class, 'loginPage'])->name('adminlogin');
    Route::post('login',[AdminLoginController::class, 'loginInfoCheck'])->name('adminlogincheck');

    Route::middleware('auth')->group(function(){
        Route::get('dashboard',[AdminLoginController::class, 'loginPage'])->name('adminlogin');
    });

});


