<?php

use App\Http\Controllers\BeerController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('beer', [BeerController::class,'index']);

Route::middleware('auth:sanctum')->group(function() {
    // Route::get('beer', [BeerController::class,'index']);
});