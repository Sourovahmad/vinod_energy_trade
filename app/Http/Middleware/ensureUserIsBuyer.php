<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ensureUserIsBuyer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {


        if(auth()->user()->user_type == 'buyer'){

            return $next($request);
        }else{
            return redirect()->route('index')->withErrors('To access this section, please create a selller account');
        }

    }
}
