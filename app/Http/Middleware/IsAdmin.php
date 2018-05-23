<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
      if(Auth::user()) {
        if (Auth::user()->admin() == true) {
          return $next($request);

        }
        return redirect('/admin')->with('adminFailLogin', 'You are not administrator');
      }
      return redirect('/admin')->with('adminFailLogin', 'You are not administrator');

    }
}
