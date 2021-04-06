<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\UserController;

Route::group(['middleware' => ['auth'], 'prefix' => 'admin','as' => 'admin.'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('/users', [UserController::class, 'all'])->name('users');
    Route::post('/users/delete', [UserController::class, 'all'])->name('user.destroy');
    Route::post('/users/id', [UserController::class, 'all'])->name('make.admin');

    Route::get('/crud/generator', [DashboardController::class, 'crudGUI'])->name('crud.gui');

    Route::resources(['settings' => SettingsController::class]);
});
