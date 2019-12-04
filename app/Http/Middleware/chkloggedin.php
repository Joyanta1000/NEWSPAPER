<?php

namespace App\Http\Middleware;

use Closure;

use Session;

class chkloggedin
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
          if(!Session::has('remail')){
            
            return redirect('/reporter/login');
        }

        return $next($request);
    }
}
