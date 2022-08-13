<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRoleController;
// use Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Auth::routes();
Route::get('/pending', [HomeController::class, 'pending'])->name('pending');
// Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/role', [UserRoleController::class, 'index'])->name('role');
Route::get('/role/{id}', [UserRoleController::class, 'update'])->name('update');
Route::get('/deactivate', [HomeController::class, 'deactivate'])->name('deactivate');

Route::group(['middleware' => ['user.auth', 'admin.auth']], function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});


Route::prefix('roles')->group(function(){
    Route::get('/', [RoleController::class, 'index']);
    Route::post('/', [RoleController::class, 'store']);
    Route::get('/{id}', [RoleController::class, 'show']);
    Route::put('/{id}', [RoleController::class, 'update']);
    // Route::delete('/{id}', [RoleController::class, 'destroy']);
});

Route::put('user_role/{id}', [UserRoleController::class, 'update']);

Route::group(['middleware' => ['admin.auth']], function(){

});

