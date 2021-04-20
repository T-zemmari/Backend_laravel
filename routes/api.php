<?php

use App\Http\Controllers\GameController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MembresiaController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\MessageController;

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
 Route::post('/logout',[UserController::class,'logOut']);

 //Game Routes

 Route::post('/addGame', [GameController::class, 'createGame']);
 Route::get('/Game',[GameController::class,'indexGame']);


 //Membresia Routes

 Route::post('/profile/{id}/Party',[MembresiaController::class,'WekcomeToParty']);
 Route::get('/Parties',[MembresiaController::class,'getAllParties']);
 Route::get('/Parties',[MembresiaController::class,'getPartyByGameId']);
 Route::get('/profile/{id}/myparties',[MembresiaController::class , 'getMyParties']);

 //Group Routes

 Route::post('/groups',[GrupoController::class,'addGroup']);
 Route::get('/groups',[GrupoController::class,'showAllGroups']);

 //Messages Routes

 Route::post('/profile/{id}/messages',[MessageController::class,'addMessage']);
 Route::get('/messages',[MessageController::class,'getAllMessages']);
 Route::get('/messages/{id}',[MessageController::class,'getMessagesById']);
 Route::update('/profile/messages/{id}',[MessageController::class,'updateMessage']);
 Route::delete('/profile/{id}/messages/delete',[MessageController::class,'removeMessage']);
