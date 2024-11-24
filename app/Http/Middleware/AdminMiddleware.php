<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()->roles != 'pengelola') {
            session()->flash('message', 'Akses Ditolak. Anda memerlukan role Pengelola untuk mengakses halaman ini.');
            abort(403);
        }
        return $next($request);
    }
}
