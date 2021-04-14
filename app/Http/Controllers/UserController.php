<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    //
    //Función encargada de buscar un usuario dado un nick
    public function getOneUser($nickname) {
        try {

            return Usuario::all()->where('nickname', '=', $nickname)
            ->makeHidden(['password'])->keyBy('id');
       
        } catch (QueryException $error){
            return $error;
        }
    }

    public function registerUser(Request $request){

       

           $nickname = $request->input('nickname');
           $name = $request->input('name');
           $password = $request->input('password');
           $email = $request-> input('email');
           $phone = $request-> input('phone');
           $adress = $request-> input('adress');

           $password = Hash::make($password);

        try{
            return Usuario::create([
                'nickname' => $nickname,
                'name' => $name,
                'password' => $password,
                'email' => $email,
                'phone' =>$phone,
                'adress'=>$adress
            ]);

             
        } catch (QueryException $error){
            return $error;
        }
    }
}
