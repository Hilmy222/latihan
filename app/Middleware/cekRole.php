<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class cekRole
{
    public function handle(Request $request, Closure $next, $rules): Response
    {
        if (in_array($request->user()->role, $rules)) {
            return $next($request);
        }
        
        return redirect('/');
    }
}
