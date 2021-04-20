<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;
use PHPUnit\TextUI\XmlConfiguration\Group;

class MessageController extends Controller
{
    

  //..........Añadir mensajes.............//

    public function addMessage(Request $request ,$id){
   
           $from = $request->input('from');
           $message =$request->input('message');
           $grupoid=$request->input('grupoid');
           //$userid=$request->input('userid');
           
       

        try{

          return
           [
            'Status'=>'Success',
            Message::create([
               'from'=>$from,
               'userid'=>$id,
               'grupoid'=>$grupoid,
               'message'=>$message,
               
           ])];

        }catch(QueryException $error){
            return $error;
        }
}


       //..........listar mensajes.............//
       
      public function getAllMessages(Request $request){

             try{
                
                return
                [
                  'Status'=>'Success',
                  Message:: all()
                
                ];

             }catch(QueryException $error){
            return $error;
        }
      }

      //.........listar mensajes de un usuario..........//

          public function getMessagesByid(Request $request){

            
             $userid=$request->input('userid');

              try{
           
                 return 
                  [
                  'Status'=>'Success',
                   Message::where('userid','=',$userid)->get()
                  ];

             }catch(QueryException $error){

                 return $error;
            }
 }

          public function updateMessage(Request $request){
                  
            
            $message = $request-> input('message');
            $messageID=$request->input('messageid');
            
         
            try{

            return 
            
              [
                Message:: where('id','=',$messageID)->update(
                ['message' =>$message]),
                'Success'=>"Mensaje modiicado ",
                'Mensaje Modificado' => $message

              ];
          }catch(QueryException $error){
             return $error;
    }
  }
      //..........borrar mensajes...........................//

      public function removeMessage(Request $request){

       $idMessge=$request->input('id');
       $userid = $request->input('userid');
       $Message = Message::where('userid','=',$userid)->where('id','=',$idMessge)->first();
       $idUserInMessager =$Message['userid'];

       
        try{
            if($userid == $idUserInMessager){
              return [
                      'Success'=>'Mensaje borrado con exito',
                       $Message->delete()
                     ];
            }else{
              return ['Status'=>"No puedes borrar mensajes que no son de tu propiedad"];
            }
      }catch(QueryException $error){
        
          return $error;
     }


      }


}