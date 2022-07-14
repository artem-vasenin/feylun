<?php

use App\Http\Controllers\Client\ClientMainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClientMainController::class, 'index']);
