<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class AdminMiddleware
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
        $user = Auth::user();
        if(!$user){

            FacadesSession::flash("success","bạn không phải là Giám đốc");
            return redirect()->back();
        }else{
            if($user->role == "Giám đốc" ){

                return $next($request);

            }else{
                FacadesSession::flash("success","bạn không phải là Giám đốc");
            return redirect()->back();
            }
        }
    }
}
