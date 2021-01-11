<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CustomerCheck
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

        if($type === 'Customer'){

            return redirect(route('app.home'));


        }else{
            return $next($request);
        }
    }
}
