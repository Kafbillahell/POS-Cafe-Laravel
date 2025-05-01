<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\DashboardController;
use App\http\Controllers\Dashboard2Controller;
use App\http\Controllers\FormsController;



Route::get('/',[HomeController::class, 'index']);
Route::get('/dashboard1', [DashboardController::class, 'dashboard1'])->name('dashboard1');
Route::get('/dashboard2', [Dashboard2Controller::class, 'dashboard2'])->name('dashboard2');
Route::get('/formbasic', [FormsController::class, 'formbasic'])->name('formbasic');




