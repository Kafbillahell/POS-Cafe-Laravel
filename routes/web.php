<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;

Route::get('/',[HomeController::class, 'index']);
