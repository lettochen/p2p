<?php

namespace App\Http\Middleware;

use Closure;

class Testmiddleware
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
        if (!session('uid')){
            return redirect('/login');
        }

        return $next($request);
    }


}
