<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Symfony\Component\HttpFoundation\Response;

class MemberMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role == 'Member') {
            // requête de continuer
            return $next($request);
        }

        return redirect('/')->with('error', "Vous n'avez pas accès à cette section.");
    }
}
