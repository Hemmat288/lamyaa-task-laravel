<?php

namespace App\Http\Controllers\api;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
   public function register(Request $request)
   {
       ///////validation
       $input= $request->validate([
           'name'=>"required | string",
           'email'=>"required | string |email |unique:users,email",
            'password' => "required",
       ]);
       ////////send specific data
       $user= User::create([
           'name'=>$input["name"],
           'email'=>$input["email"],
            'password'=>Hash::make($input["password"]),
       ]);
       ////genrate token
       $token = $user->createToken('mytoken')->plainTextToken;
       $response=[
           "status"=>true,
           "msg"=>"done",
           'data'=>[
                    'user'=>$user,
                    'token'=>$token
           ]
        ];
        return response($response,201);
   }
   public function Login(Request $request){
      $user=User::where('email',$request['email'])->firstOrFail();
      $token=$user->createToken('auth_token')->plainTextToken;
      return response()->json([
          'msg'=>"done",
          "token"=>$token
      ]);
   }
}
