<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        foreach ($roles as $role) {
            if ($this->checkRole($user, $role)) {
                return $next($request);
            }
        }

        // If the user doesn't have any of the specified roles, redirect them
        return redirect()->route('console.login')->with('error', 'Unauthorized access.');
    }

    private function checkRole($user, $role)
    {
        switch ($role) {
            case 'admin':
                return $user->isAdmin();
            case 'standard':
                return $user->isStandard();
            case 'limited':
                return $user->isLimited();
            default:
                return false;
        }
    }
}
