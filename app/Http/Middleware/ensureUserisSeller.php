<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ensureUserisSeller
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
        if(auth()->user()->user_type == 'seller'){

            return $next($request);
        }else{
            return redirect()->route('index')->withErrors('Create A Seller Account To access This Page');
        }

    }
}
