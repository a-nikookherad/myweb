<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class customersMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */

    public function handle($request, Closure $next, $guard = null)
    {

        $req=$request->user();
        if ($req) {
            if ($req->role !=='customers' || $req->active == 0) {
                return redirect()->route('customers.sign_in');
            }
            return $next($request);
        }else{
            return redirect()->route('customers.sign_in');
        }
    }


}
