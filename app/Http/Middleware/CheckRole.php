<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
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
        $roles = $this->getRequiredRole($request->route());
        if($roles ==  $request->user()->role->first()->id ){
            return $next($request);
        }
        else{
            return redirect('/');
        }
    }

    private function getRequiredRole($route){
        $actions = $route->getAction();
        return isset($actions['roles']) ? $actions['roles'] : null;
    }

}
