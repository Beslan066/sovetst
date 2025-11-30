<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $userRole = Auth::user()->role_id;

            // Разрешаем доступ только для ролей 1 и 10
            if ($userRole != 1 && $userRole != 10) {
                return redirect('/');
            }
        }

        return $next($request);
    }
}
