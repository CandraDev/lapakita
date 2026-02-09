<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckStore
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if (! $user || ! $user->store()->exists()) {
            // Kalau belum punya store, arahkan ke register
            return redirect()->route('seller.register.index')
                             ->with('error', 'Anda harus menjadi penjual terlebih dahulu.');
        }

        return $next($request);
    }
}
