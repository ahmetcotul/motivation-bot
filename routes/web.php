<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\MotivationController;

Route::get('/', [MotivationController::class, 'index']);
