<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Validation\UnauthorizedException;

class ApiTokenAuthenticationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->has('api-token')) {
            throw new \Exception('Unauthorized', 401);
        }

        if (!$user = User::where('api_token', $request->get('api-token'))->first()) {
            throw new \Exception('Unauthorized', 401);
        }

        return $next($request);
    }
}
