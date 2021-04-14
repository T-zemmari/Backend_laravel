<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// User Routes  

// Route::post('/register', [UserController::class, 'registerUser']);
// Route::get('/profile',[UserController::class, 'getOneUser']);
