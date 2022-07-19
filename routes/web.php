<?php

use App\Http\Controllers\Admin\AdminMainController;
use App\Http\Controllers\Auth\AuthMainController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Client\ClientMainController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClientMainController::class, 'index'])->name('home');
Route::get('/logout', [AuthMainController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
  Route::get('/', [AdminMainController::class, 'index'])->name('admin.index');

  Route::get('/cats', [CategoryController::class, 'index'])->name('admin.cats');
  Route::get('/cat/{slug}', [CategoryController::class, 'edit'])->name('admin.cats.edit');
  Route::get('/cats/form', [CategoryController::class, 'form'])->name('admin.cats.form');
  Route::post('/cats/create', [CategoryController::class, 'create'])->name('admin.cats.create');
  Route::put('/cats/update/{id}', [CategoryController::class, 'update'])->name('admin.cats.update');
  Route::delete('/cats/{id}', [CategoryController::class, 'delete'])->name('admin.cats.delete');

  Route::get('/pages', [PageController::class, 'index'])->name('admin.pages');
  Route::get('/page/{slug}', [PageController::class, 'edit'])->name('admin.pages.edit');
  Route::get('/pages/form', [PageController::class, 'form'])->name('admin.pages.form');
  Route::post('/pages/create', [PageController::class, 'create'])->name('admin.pages.create');
  Route::put('/pages/update/{id}', [PageController::class, 'update'])->name('admin.pages.update');
});

Route::group(['prefix' => 'auth', 'middleware' => 'guest'], function() {
  Route::get('/', [AuthMainController::class, 'index'])->name('auth.index');
  Route::post('/login', [AuthMainController::class, 'login'])->name('auth.login');
  Route::get('/reg', [AuthMainController::class, 'regForm'])->name('auth.regForm');
  Route::post('/reg', [AuthMainController::class, 'reg'])->name('auth.reg');
});
