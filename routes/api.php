<?php

use App\Http\Controllers\GameController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MembresiaController;
use App\Http\Controllers\GrupoController;
use App\Models\Membresia;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// User Routes  


 Route::post('/register', [UserController::class, 'registerUser']);
 Route::get('/users',[UserController::class,'getAllUsers']);
 Route::post('/login',[UserController::class , 'loginUser']);
 Route::get('/profile/{id}',[UserController::class, 'getUserById']);
 Route::get('/profile/{nickname}',[UserController::class, 'getUserByNickname']);
 Route::put('/update',[UserController::class,'updateUser']);
 Route::delete('/remove',[UserController::class,'deleteUser']);

 //Game Routes

 
 Route::post('/addGame', [GameController::class, 'createGame']);
 Route::get('/addGame',[GameController::class,'indexGame']);


 //Membresia Routes

 Route::post('/profile/{nickname}/addParty',[MembresiaController::class,'addParty']);
 Route::get('/Parties',[MembresiaController::class,'getAllParties']);

 //Group Routes

 Route::post('/grups',[GrupoController::class,'addGrup']);
 Route::get('/grups',[GrupoController::class,'showAllGrups']);