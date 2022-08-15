<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Role;
use App\Models\UserRole;
use Illuminate\Http\Request;

class PendingAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth('sanctum')->user();
        $user_role = UserRole::where('user_id', $user->id)->first();
        $role = Role::where('id', $user_role->role_id)->first();
        if ($role->name == 'Pending') {
            return redirect()->route('pending');
        }
        return $next($request);
    }
}
