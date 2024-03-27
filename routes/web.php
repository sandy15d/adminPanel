<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Master\RoleController;
use App\Http\Controllers\Master\PermissionController;
use App\Http\Controllers\Master\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes([
    'register' => false,

]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Authenticated Routes
Route::middleware(['auth'])->group(function () {
//===================Role & Permission=======================
    Route::resource('role', RoleController::class);
    Route::resource('permission', PermissionController::class);
//====================User=======================
    Route::resource('user', UserController::class);
});
