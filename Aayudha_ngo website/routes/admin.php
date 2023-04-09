<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Admin'],function(){
    Route::get('/admin',[LoginController::class,'index'])->name('admin.login');    
    Route::post('/login', [LoginController::class,'adminLogin'])->name('admin.login.submit');
   

    Route::group(['middleware'=>'auth:admin','prefix'=>'admin', 'as'=>'admin.'],function(){
        Route::get('/dashboard', [DashboardController::class,'dashboardView'])->name('dashboard'); 
        Route::post('logout', [LoginController::class,'logout'])->name('logout');
        Route::get('/change/password/form', [DashboardController::class,'changePasswordForm'])->name('change_password_form');
        Route::post('/change/password', [DashboardController::class,'changePassword'])->name('change_password');

    });

});