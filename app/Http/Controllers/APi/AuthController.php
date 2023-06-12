<?php

namespace App\Http\Controllers\APi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\User;
use Auth;
use Nette\Utils\Validators;

class AuthController extends Controller
{
    public function register(Request $request)
    {
            $validator = Validators::make($request->all(), [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'confirm_password' => 'required|same:password'
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'ada kesalahan',
                    'data' => $validator->errors()
                ] );
            }
        $input =$request->all();
        $input['password']=bcrypt($input['password']);
        $user=User::create($input);
        $success['token'] = $user->createToken('auth_token')->plainTextToken;
        $success ['name']= $user->name;

        return response()->json([
            'success'=>true,
            'message'=>'Sukses Register',
            'data'=>$success
        ]);

        }

        // public function login(Request $request)
        // {
        //     if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        //     {
        //         $auth=Auth([User]);
        //         $success['token'] = $auth->createToken('auth_token')->plainTextToken;
        //         $success['name']=$auth->name;

        //         return response()->json([
        //             'success'=>true,
        //             'message'=>'Login Sukses',
        //             'data'=>$success
        //         ]);
        //     } else {
        //         return response()->json([
        //             'success'=>true,
        //             'message'=>'Silahkan Cek Email or Password',
        //             'data'=>null
        //         ]);
        //     }
        // }

}
