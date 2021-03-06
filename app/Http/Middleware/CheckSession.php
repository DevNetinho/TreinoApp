<?php

namespace App\Http\Middleware;

use Closure;

class CheckSession
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
        session_start();

        if(isset($_SESSION['user1']) && $_SESSION['user1'] != '') {

            return $next($request);

        } else {
            return redirect()->route('login', ['erro' => 2]);
        }
        
    }
}
