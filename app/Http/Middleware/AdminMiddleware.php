<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        //dd(!auth()->check());
        //auth()->check()   检测用户是否登录
        if(!auth()->check() || auth()->user()->is_admin != 1){
            return redirect()->route('home');
        }

        return $next($request);
    }
}
