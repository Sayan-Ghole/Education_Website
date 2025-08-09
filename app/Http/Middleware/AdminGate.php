<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminGate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = session()->get('userExist');
        $user2 = session()->get('userExist2');
       
        $expected = config('custom.user_session_value');//1

        if($user!=$expected && $user2!=$expected){
             return redirect("/register");
        
        }
        
        return $next($request);
        
    }
}
