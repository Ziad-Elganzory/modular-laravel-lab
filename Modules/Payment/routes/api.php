<?php

use Illuminate\Support\Facades\Route;
use Modules\Payment\Http\Controllers\PaymentController;

Route::prefix('v1')->group(function () {
    Route::get('payment', PaymentController::class)->name('payment');
});
