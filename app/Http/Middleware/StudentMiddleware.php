<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Service\Role;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StudentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ((int)auth()->user()->role !== Role::Admin->value) {
            abort(404);
        }
        return $next($request);
    }
}
