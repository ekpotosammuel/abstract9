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

// Route::get('/deactivate', [HomeController::class, 'deactivate'])->name('deactivate');

// Route::group(['middleware' => ['user.auth']], function(){
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });
Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['admin.auth']], function(){
    Route::get('/role', [UserRoleController::class, 'index'])->name('role');
    Route::get('/role/{userRole}', [UserRoleController::class, 'showForm'])->name('show');
    Route::put('/role/{id}', [UserRoleController::class, 'update'])->name('update');

    Route::prefix('roles')->group(function(){
        Route::get('/', [RoleController::class, 'index']);
        Route::post('/', [RoleController::class, 'store']);
        Route::get('/{id}', [RoleController::class, 'show']);
        Route::put('/{id}', [RoleController::class, 'update']);
    });
});

Route::get('/pending', [HomeController::class, 'pending'])->name('pending');
