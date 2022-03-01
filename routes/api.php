<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login', [App\Http\Controllers\Api\loginController::class, 'login']);
Route::post('/register', [App\Http\Controllers\Api\loginController::class, 'register']);
Route::middleware('auth:api')->group(function () {
    Route::get('/home', [App\Http\Controllers\Api\homeController::class, 'index']);
    Route::get('/postuler', [App\Http\Controllers\Api\homeController::class, 'postuler']);
    Route::get('/getdonner', [App\Http\Controllers\Api\homeController::class, 'getdonneer']);
    Route::get('/sychncro', [App\Http\Controllers\Api\homeController::class, 'sychncro']);
    Route::post('/update', [App\Http\Controllers\Api\homeController::class, 'update']);
});
