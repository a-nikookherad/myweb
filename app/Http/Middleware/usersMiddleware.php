<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class usersMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $req=$request->user();
        if ($req) {
            if ($req->role!=='admin' || $req->active == 0) {
                return redirect()->route('login');
            }
            return $next($request);
        }else{
            return redirect()->route('login');
        }
    }
}
