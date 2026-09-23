<?php

use Illuminate\Support\Facades\Route;
use Modules\Dashboard\Http\Controllers\DashboardController;

Route::prefix('v1')->group(function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');
});
