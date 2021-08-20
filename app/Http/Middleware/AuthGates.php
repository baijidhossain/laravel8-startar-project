<?php

namespace App\Http\Middleware;
use App\Http\Controllers;
use App\Model\Permission;
use Closure;
use Illuminate\Http\Request;

use App\Model\User;
use Illuminate\Support\Facades\Gate;
 use Illuminate\Support\Facades\Auth;

class AuthGates
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $user=Auth::user();
        if($user){

           $permissions=Permission::all();
           foreach( $permissions as $key=>$permission){
              Gate::define($permission->slug,function (User $user) use ($permission){
                return $user->hasPermission($permission->slug);
              });
           }
        }

        return $next($request);
    }
}
