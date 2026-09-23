<?php

namespace Modules\Payment\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Modules\Payment\Services\PaymentService;

class PaymentController extends Controller
{
    public function __invoke(PaymentService $paymentService): Response
    {
        return response($paymentService->moduleName());
    }
}
