<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    //Función encargada de buscar un usuario dado un nick
    public function getOneUser($nickname) {
        try {

            return User::all()->where('nickname', '=', $nickname)
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
            return User::create([
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
