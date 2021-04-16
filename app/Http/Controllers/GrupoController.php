<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function addGroup(Request $request){

        $name = $request->Input('name');
        $owner = $request->Input('owner');

        try{
            return Grupo::create([

                'name'=>$name,
                'owner'=>$owner
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
