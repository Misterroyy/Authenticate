<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustumAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $path = $request->path();
        if(($path=='login' || $path=='register') && session::get('user'))
        {
                return redirect ('/login');
        }
        // else if (( $path!='dashboard' && !session::get('user')) && ($path!= "dashboard" && !session::get('user')))
        // {
        //     return redirect ('/login');
        // }
        return $next($request);
    }
}
