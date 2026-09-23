<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Modules\Auth\Services\AuthenticationService;

class AuthController extends Controller
{
    public function __invoke(AuthenticationService $authenticationService): Response
    {
        return response($authenticationService->moduleName());
    }
}
