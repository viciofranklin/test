<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return  redirect()->route( request()->user() ? config('app.user_home_route_name') : 'login') ;
});

Route::get('user/login', function() {
    return view('login');
})->name('login');

Route::group(['prefix' => 'user'], function () {
    
    Route::post('login', [AuthController::class,'authenticate'])->name('login.authenticate');
    
    Route::group(['middleware' => 'auth:sanctum'], function () {
        
        Route::post('logout', [AuthController::class,'logout'])->name('logout');

        Route::get('/home', function () {
            return view('beers');
        })->name(config('app.user_home_route_name'));
    });
    
});

