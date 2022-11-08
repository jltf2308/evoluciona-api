<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\TokenController;
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
Route::group(['prefix'=>'v1'], function () {
    Route::post('/sanctum/token', TokenController::class);
    Route::middleware(['auth:sanctum'])->group(function () {
        Route::get('/users/auth', AuthController::class);
    });
});
