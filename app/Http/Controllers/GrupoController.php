<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function addGroup(Request $request){

        $name = $request->Input('name');
        $nickname = $request->Input('owner');
        $userid = $request->input('userid');
        $gameid =$request->input('gameid');

        try{
            return Grupo::create([

                'name'=>$name,
                'owner'=>$nickname,
                'userid'=>$userid,
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
}
