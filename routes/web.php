<?php

use App\Http\Controllers\Admin\AdminMainController;
use App\Http\Controllers\Auth\AuthMainController;
use App\Http\Controllers\Client\ClientMainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClientMainController::class, 'index']);
Route::get('/logout', [AuthMainController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'admin'], function() {
  Route::get('/', [AdminMainController::class, 'index'])->name('admin.index');
});

Route::group(['prefix' => 'auth', 'middleware' => 'guest'], function() {
  Route::get('/', [AuthMainController::class, 'index'])->name('auth.index');
  Route::post('/login', [AuthMainController::class, 'login'])->name('auth.login');
  Route::get('/reg', [AuthMainController::class, 'regForm'])->name('auth.regForm');
  Route::post('/reg', [AuthMainController::class, 'reg'])->name('auth.reg');
});
