<?php

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


Route::middleware('auth:sanctum')->get('/user-roles', [\App\Http\Controllers\Api\UserRolesController::class, 'index']);
Route::middleware('auth:sanctum')->post('/user-roles', [\App\Http\Controllers\Api\UserRolesController::class, 'store']);