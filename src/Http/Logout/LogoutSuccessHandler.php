<?php

namespace Devim\Provider\SecurityJwtServiceProvider\Http\Logout;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler;

class LogoutSuccessHandler extends DefaultLogoutSuccessHandler
{
    public function onLogoutSuccess(Request $request)
    {
        return new JsonResponse();
    }
}
