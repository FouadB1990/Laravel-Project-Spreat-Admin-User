<?php

namespace App\Http\Middleware;
use Closure;

   
class IsAdmin

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

        if(auth()->user()->is_admin == 1){

            return $next($request);

        }

        elseif(auth()->user()->is_admin == 0){

            // return "you are admin pleas login in admin page here";
             return redirect('dashboard')->with('error',"You don't have admin access.");
        }

        // return redirect('home')->with('error',"You don't have admin access.");
    }

}