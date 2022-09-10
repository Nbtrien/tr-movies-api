<?php

namespace App\Http\Controllers\Api;

use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    // Login 
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (!$token = auth()->attempt($credentials)) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid Email or Password',
            ], 401);
        }

        return response()->json(['data'=>[
            'status' => true,
            'token' => $token,
            'user' => Auth::user()
        ]]);

    }

    // Register
    public function register(Request $request)
    {
        $encreptedPass = \Hash::make($request->password);
        $user = new User;
        try {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $encreptedPass;
            $user->save();
            return $this->login($request);
        } catch (Exception $e) 
        {
            return response()->json([
                'status' => false,
                'message' => $e
            ]);
        }
    }

    // Logout
    public function logout()
    {
        try {
            return response()->json([
                'status' => true,
                'message' => "Logout Successful"
            ]);
        } catch (Exception $e) 
        {
            return response()->json([
                'status' => false,
                'message' => "Logout Failed"
            ]);
        }
    }

    // Check Token
    public function checkToken(){
        return response()->json([
            'status' => true,
            'message' => "Unexpired Token"
        ]);
    }

    // Check email exist
    public function checkEmail(Request $request)
    {
        $result = true;
        $email = $request->email;
        $user = User::where("email", "=", $email)->first();
        if ($user != null) {
            $result = false;
        }
        return response()->json($result);
    }

    public function index()
    {
        $user = User::get();
        return response()->json([
            'user' => $user
        ]);
    }
}
