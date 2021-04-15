<?php

namespace App\Http\Controllers;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;


class GameController extends Controller
{
    public function createGame(Request $request){
        $name = $request->input('name');
        $studio = $request->input('studio');
        $releaseYear = $request-> input('releaseYear');
        $about = $request-> input('about');

     try{
         return Game::create([
             'name' => $name,
             'studio' => $studio,
             'releaseYear' => $releaseYear,
             'about' =>$about,

         ]);

          
     } catch (QueryException $error){
         return $error;
     }
 }
   
    //
}
