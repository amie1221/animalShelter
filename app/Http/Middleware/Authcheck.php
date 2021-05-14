<?php

namespace App\Http\Middleware;

use Closure;

class Authcheck
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
        if(!session()->has('LoggedUser') && ($request->path() !='login' && $request->path() !='register')){
            return redirect('login')->with('fail','You must be logged in!!');
        }

        if(!session()->has('LoggedUser') && ($request->path() == 'login' || $request->path() == 'register')){
            return back();
        }
        return $next($request)->header('Cache-Control','no-cache', 'no-store','max-age=0', 'must-revalidate')->header('Pragma','no-cache')->header('Expires', 'Sat 01 Jan 00:00:00 GMT');
    }
}
