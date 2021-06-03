<?php

namespace App\Http\Middleware;
use Carbon\Carbon;

use Closure;
use Illuminate\Http\Request;

class FechaMiddleare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       
        //echo '<h5>' . date("d/m/y") . '</h5>';//
        $now= Carbon:: now();

        echo $now;
    

        return $next($request);
    }
}
