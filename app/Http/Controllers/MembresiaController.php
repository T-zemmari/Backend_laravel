<?php

namespace App\Http\Controllers;

use App\Models\Membresia;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class MembresiaController extends Controller
{
    
    public function addParty(Request $request){

        $userId = $request->Input('userid');
        $groupId = $request->Input('grupoid');

        try{
            return Membresia::create([

                'userid'=>$userId,
                'grupoid'=>$groupId
              ]);

        }catch (QueryException $error){
                return $error;}
    }


}
