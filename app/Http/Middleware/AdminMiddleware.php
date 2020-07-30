<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     * checked if the user not login or he is login but not is_admin then we redirect him to the landing page else we proceed.
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::check() || (Auth::check() && Auth::user()->is_admin !== 1)) {

            return redirect('home');
        }


        return $next($request);
    }
}
