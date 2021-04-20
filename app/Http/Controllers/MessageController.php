<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;

class MessageController extends Controller
{
    
    public function addMessage(Request $request ,$id){
   
           $from = $request->input('from');
           $message =$request->input('message');
           $grupoid=$request->input('grupoid');
           //$userid=$request->input('userid');
           
       

        try{

          return Message::create([
               'from'=>$from,
               'userid'=>$id,
               'grupoid'=>$grupoid,
               'message'=>$message,
               
           ]);

        }catch(QueryException $error){
            return $error;
        }
}

      public function getAllMessages(Request $request){

             try{
                
                return Message:: all();

             }catch(QueryException $error){
            return $error;
        }
      }
}