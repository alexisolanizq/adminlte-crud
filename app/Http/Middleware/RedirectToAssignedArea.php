<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectToAssignedArea
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (auth()->check() && auth()->user()->area->name == $role) {
            return $next($request);
        }

        if (auth()->user()->area->name === 'admin') {
            return redirect()->route('admin.index');
        }
        return redirect()->route('user.index');
        // return response()->json(['Sin permisos para acceder']);
    }
}
