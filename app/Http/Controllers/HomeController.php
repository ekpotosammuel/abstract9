<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\UserRole;
// use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth('sanctum')->user();
        $user_role = UserRole::where('user_id', $user->id)->first();
        $role = Role::where('id', $user_role->role_id)->first();
        if ($role->name == 'Pending') {
            return redirect()->route('pending');
        }
        return view('home');
    }
    public function pending()
    {
        return view('pending');
    }
    public function deactivate()
    {
        return view('deactivated');
    }
}
