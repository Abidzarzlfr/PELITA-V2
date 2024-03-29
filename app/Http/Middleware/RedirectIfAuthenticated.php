<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        // foreach ($guards as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         return redirect(RouteServiceProvider::HOME[0]);
        //     }
        // }

        // return $next($request);
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::guard($guard)->user();
                // Pengecekan role pengguna
                if ($user->role == 'admin') {
                    return redirect(RouteServiceProvider::HOME[0]); // Admin redirect ke /home
                } elseif ($user->role == 'user') {
                    return redirect(RouteServiceProvider::HOME[1]); // Dokter redirect ke /dashboard
                } else {
                    // Jika tidak ada peran yang sesuai, lanjutkan dengan eksekusi berikutnya
                    return $next($request);
                }
            }
        }
        // Jika pengguna belum terautentikasi atau tidak memiliki peran, lanjutkan dengan eksekusi berikutnya
        return $next($request);
    }
}
