<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class VerifyRecoveryCode
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
        $code =  Session::get('password-recovery-code');

        if( $code == null){
            return redirect(route('login'));
        }

        return $next($request);
    }
}
