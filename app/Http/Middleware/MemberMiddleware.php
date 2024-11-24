<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class MemberMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()->roles != 'member' || Auth::user()->status == 1 ){
          session()->flash('message', 'Akun Anda Sedang Berstatus Nonaktif. Silahkan Hubungi Admin Untuk Pengaktifan.');
          abort(403);
        }
        return $next($request);
    }
}
