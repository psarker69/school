<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\SiteSettingController;
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
    Route::get('logout',[AdminLoginController::class, 'adminLogOut'])->name('admin.logout');

    Route::middleware('auth')->group(function(){
        Route::prefix('admin/')->group(function(){
            Route::get('dashboard',[DashboardController::class, 'dashboard'])->name('admin.dashboard');
            Route::resource('profile', AdminProfileController::class);
            Route::put('profile/update/{id}', [AdminProfileController::class,'updateEmail'])->name('emailUpdate');

            Route::prefix('site_setting')->group(function(){
                Route::get('show', [SiteSettingController::class,'show'])->name('site.settings');
                Route::get('ajax-call/{siteid}', [SiteSettingController::class,'siteEdit'])->name('site.edit');
            });



        });

    });

});


