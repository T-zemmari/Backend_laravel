<?php

use App\Http\Controllers\GameController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// User Routes  


 Route::post('/register', [UserController::class, 'registerUser']);
 Route::get('/profile/{id}',[UserController::class, 'getUserById']);
 Route::get('/profile/{nickname}',[UserController::class, 'getUserByNickname']);
 Route::put('/update',[UserController::class,'updateUser']);
 Route::delete('/remove',[UserController::class,'deleteUser']);

 //Game Routes

 
 Route::post('/addGame', [GameController::class, 'createGame']);