<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginUser(Request $request){

          $email = $request->input('email');
          $password = $request->input(('password'));

          try{

            $validate = User::select('password')
            ->where('email','LIKE',$email)
            ->first();

            if(!$validate){
                return response()->json([
                    'error' => 'email o password no correcto'
                ]);
            }
          }
    }
}
