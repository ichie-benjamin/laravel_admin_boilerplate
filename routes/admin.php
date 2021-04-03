<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/users', [UserController::class, 'all'])->name('admin.users');
    Route::post('/users/delete', [UserController::class, 'all'])->name('admin.user.destroy');
    Route::post('/users/id', [UserController::class, 'all'])->name('admin.make.admin');

    Route::get('/crud/generator', [DashboardController::class, 'crudGUI'])->name('admin.crud.gui');

//    Route::get('/make/admin/{id}', 'UsersController@makeAdmin')->name('admin.make.admin');
//    Route::get('/user/delete/{id}', 'UsersController@delete')->name('admin.user.destroy');
});
