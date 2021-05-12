<?php

namespace App\Http\Middleware;

use Closure;

class KepsekMiddleware
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
        $user = $request->user();
        if ($user){
            if($user->isKepsek()){
            return $next($request); 
            }
        }
        return abort(403);
    }
}
