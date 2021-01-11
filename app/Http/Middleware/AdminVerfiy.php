<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminVerfiy
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

        $type = Auth::user()->user_type;

        if($type == 'Admin' || $type == 'Super-admin' || $type=='Developer'){
            return $next($request);
        }else{
            return redirect(route('dashboard'));
        }

    }
}
