<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

use App\Models\User;

class Token
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        
        $token = $request->input('token');
        $id = $request->input('id');

        try {

                $q = User::where('token', 'LIKE', $token)
                ->where('id', '=', $id)
                ->first();
            
                if(!$q){
                    //token no coincide.. return
                    return; 
                }
             
                return $next($request);

           } catch(QueryException $err) {
                return $err;
           }
    }
}