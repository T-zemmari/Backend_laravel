<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    public function getUserById($id) {
        try {

            return User::all()->where('id', '=', $id)
            ->makeHidden(['password'])->keyBy('id');
       
        } catch (QueryException $error){
            return $error;
        }
    }

    public function getUserByNickname($nickname) {
        try {

            return User::all()->where('id', '=', $nickname)
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


    public function loginUser(Request $request){

        $email = $request->input('email');
        $password = $request->input('password'); 
        
        try {
             $validate = User::select('password')
            ->where('email', 'LIKE', $email)
            ->first();

            if(!$validate){
                return response()->json([
                'error' => "Email o password incorrecto"
                ]); 
            }
            
            $hashed = $validate->password;
            if(Hash::check($password, $hashed)){
                $length = 50;
                $token = bin2hex(random_bytes($length));
                User::where('email',$email)
                ->update(['token' => $token]);
                return User::where('email', 'LIKE', $email)
                ->get();
            
            }else{
                return response()->json([
                    //password incorrecto
                    'error' => "Email o password incorrecto"]);
            }
        } catch(QueryException $error){
            return response()->$error;
        }


    }


    public function updateUser(Request $request){
        
        $nickname = $request->input('nickname');
        $name = $request->input('name');
        $phone = $request-> input('phone');
        $adress = $request-> input('adress');
        $userId = $request->input('id');
        try{
        return User:: where('id','=',$userId)->update(
            [
                'nickname' => $nickname,
                'name' => $name,
                'phone' =>$phone,
                'adress'=>$adress
            ]);
       }catch(QueryException $error){
        return $error;
     }
    }

    public function deleteUser(Request $request){

        $userId = $request->input('id');

        try{
              return User::where('id','=',$userId)->delete();
   
        }catch(QueryException $error){
           return $error;
        }
       }






}
