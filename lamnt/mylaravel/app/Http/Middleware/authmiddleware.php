<?php

namespace App\Http\Middleware;

use Closure;

class authmiddleware
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
       if($this->auth->guest())
       {
            if($request->ajax())
            {
                return response('Unauthhorized',401);
            }
            else
            {
                return redirect()->guest('admin/login');
            }
       }
       return $next($request);
    }
}
