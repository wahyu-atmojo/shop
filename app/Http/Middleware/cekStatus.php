<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class cekStatus
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
        if(Auth::user()->status == 1){

        return $next($request);
        }

        return redirect('/')->with('error', 'Maaf anda tidak punya akses untuk halaman ini !!');
        

    }
}
