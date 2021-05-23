<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Peserta
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (empty(Auth::guard('peserta')->id())) {
            return back()->with('error', 'Hanya peserta yang bisa akses!');
        } else {
            return $next($request);
        }
        return back()->with('error', 'Hanya peserta yang bisa akses!');
    }
}
