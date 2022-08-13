<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use App\Models\Role;
use App\Models\UserRole;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        // $user = auth('sanctum')->user();
        // $user_role = UserRole::where('user_id', $user->id)->first();
        // $role = Role::where('id', $user_role->role_id)->first();
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
