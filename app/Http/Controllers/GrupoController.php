<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function addGroup(Request $request){

        $name = $request->Input('name');
        $gameid =$request->input('gameid');

        try{
            return Grupo::create([

                'name'=>$name,
                'gameid'=>$gameid
              ]);

        }catch (QueryException $error){
                return $error;}
    }
    public function showAllGroups(){
       
        try{
            return Grupo::all();
        }catch (QueryException $error){
            return $error;}
    }

    public function getAllGroup(){
       
        try{
            return Grupo::all();
        }catch (QueryException $error){
            return $error;}
    }

    public function getGroupByGameId(Request $request){

        $gameId = $request->Input('gameId');
        
        try{
            return Grupo::all()->where('gameId','=' ,$gameId);
        }catch (QueryException $error){
            return $error;}

    }
}
