<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::guard('user')->user();
        $uRole = $user->role;
        
        foreach($roles as $role) {
            // Check if user has the role This check will depend on how your roles are set up
            if($uRole == $role)
                return $next($request);
        }
        
        return redirect('login');
    }
}
