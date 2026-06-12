<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\LoginClient;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UaslpAuthController extends Controller
{
    public function login(Request $request, LoginClient $client): RedirectResponse
    {
        return $client->autenticar($request);
    }

    public function callback(Request $request, LoginClient $client): RedirectResponse
    {
        return $client->autenticar($request);
    }
}
