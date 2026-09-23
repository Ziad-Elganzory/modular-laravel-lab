<?php

namespace Modules\Dashboard\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Modules\Dashboard\Services\DashboardService;

class DashboardController extends Controller
{
    public function __invoke(DashboardService $dashboardService): Response
    {
        return response($dashboardService->moduleName());
    }
}
