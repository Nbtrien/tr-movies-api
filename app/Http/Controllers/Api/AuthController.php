<?php

namespace App\Http\Controllers\Api;

use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Model\Role;
use App\Http\Resources\AppResource;

class AuthController extends Controller
{
    public function __construct() {
    //     $this->middleware('auth:api', ['except' => ['login', 'register']]);
    $myTTL = 600;

    auth()->setTTL($myTTL);    
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

        $user = Auth::user();
        $role = $user->role;

        $return = collect($user)->except('role','role_id');
        $return->put('role', $role->name);

        // $return->role = $role->name;
        // $return->role;

        return response()->json(['data'=>[
            'status' => true,
            'access_token' => $token,
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => $return,
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
            ], 500);
        }
    }

    // Logout
    public function logout() {
        auth()->logout();

        return response()->json([
            'status' => true,
            'message' => 'User successfully signed out']
        );
    }

    // refresh token
    public function refresh() {
        return response()->json(['data'=>[
            'status' => true,
            'access_token' => auth()->refresh(),
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => Auth::user()
        ]]);
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
        $users = User::get();
        foreach ($users as $user) {
            $user->role;
        }
        return AppResource::collection($users);
    }
}
