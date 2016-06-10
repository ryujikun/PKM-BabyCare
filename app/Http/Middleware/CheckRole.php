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

    private $requiredRoles;
    public function handle($request, Closure $next)
    {
        $this->requiredRoles = $this->getRequiredRole($request->route());
        $userRole =  $request->user()->role->first()->id;
        if( $userRole && $this->requiredRoles ){
            if( $this->isAuthorized( $userRole ))
            {
                return $next($request);
            }
        }

        return redirect('/');

    }

    private function getRequiredRole($route){
        $actions = $route->getAction();
        return isset($actions['roles']) ? $actions['roles'] : null;
    }

    private function isAuthorized($role){
        if(is_array($this->requiredRoles))
            return in_array($role, $this->requiredRoles);
        else return $this->requiredRoles == $role;
    }
}
