<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureUserHasRole
{
    public function handle(Request $request, Closure $next, string ...$roles)
    {
        $user = $request->user();

        if (! $user || ! $user->canAccessAdminPanel() || ! in_array($user->role, $roles, true)) {
            abort(403, 'No tienes permisos para realizar esta accion.');
        }

        return $next($request);
    }
}
