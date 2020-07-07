<?php

namespace App\Http\Middleware;


use Closure;

class CheckRole
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
        if(!$request->user()->hasRole($role)){
            return view('Admin.index')
        }else{
            return view('Users.index')
        }
        return $next($request);


    }
}
