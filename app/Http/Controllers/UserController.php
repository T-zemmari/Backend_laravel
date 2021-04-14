<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
   
    public function getOneUser($nickname) {
        try {

            return Usuario::all()->where('nickname', '=', $nickname)
            ->makeHidden(['password'])->keyBy('id');
       
        } catch (QueryException $error){
            return $error;
        }
    }

        // Registrar a un usuario

           public function registerUser(Request $request){

           $nickname = $request->input('nickname');
           $password = $request->input('password');
           $name = $request->input('name');
           $email = $request-> input('email');
           $phone = $request-> input('phone');
           $adress = $request-> input('adress');

           $password = Hash::make($password);

        try{
            return Usuario::create([
                'nickname' => $nickname,
                'password' => $password,
                'name' => $name,
                'email' => $email,
                'phone' =>$phone,
                'adress' =>$adress
            ]);

            
             
        } catch (QueryException $error){
            return $error;
        }
    }
}