<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        { 
            $user_id = Auth::user()->id;
            $user = (new User())->find($user_id); 
            $success['token'] =  $user->createToken('my-token'); 
            $success['token'] = $success['token']->plainTextToken;
            $success['name'] =  $user->name;
            $success['user']  = $user;
            return response()->json(
                [
                    'status' => true,
                    'message' => "User login successfully",
                    'data' => $user,
                    'token' => $success['token'],
                    'stauts_code' => '200'
                ],
            );
        } 
        else{ 
            return response()->json(
                [
                    'status' => false,
                    'message' => "Error Occured while login. Please check your credentials",
                    'stauts_code' => '401'
                ],
            );
        } 
    }

    public function logout()
    {
        $user = auth('sanctum')->user();
        $user->tokens()->delete();
        return response()->json(
            [
                "data"  => $user,
                'status' => true,
                'message' => "User Logout Successfully",
                'stauts_code' => '200'
            ],
        );
    }
}
