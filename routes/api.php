<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController as UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::apiResource('users', UserController::class);

    });

Route::apiResource('products', ProductController::class);

Route::post("login",[UserController::class,'index']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
