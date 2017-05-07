<?php

namespace App\Http\Middleware;

use Closure,Session;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        $userRole = Session::get('role');

        if ($role !== $userRole) {
            return redirect('notAuthorize');
        }

        return $next($request);
    }
}
