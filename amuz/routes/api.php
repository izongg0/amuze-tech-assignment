<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MessageController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::post('/message', 'App\Http\Controllers\MessageController@store');

Route::middleware('auth:api')->group(function () {
    Route::post('/message', 'App\Http\Controllers\MessageController@store');
});

Route::post('v1/register', [PassportAuthController::class, 'register']);
Route::post('v1/login', [PassportAuthController::class, 'login']);
Route::middleware('auth:api')->group(function () {
    Route::post('v1/logout',  [PassportAuthController::class, 'logout']);
});