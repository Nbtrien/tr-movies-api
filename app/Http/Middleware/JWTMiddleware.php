<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Closure;

class JWTMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $message = '';
        try {

            JWTAuth::parseToken()->authenticate();
            return $next($request);

        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            $message = 'Token expired';
            $status_code = 401;
            
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) 
        {
            $message = 'Invalid token';
            $status_code = 403;
        } catch (\Tymon\JWTAuth\Exceptions\JWTException  $e) 
        {
            $message = 'provide token';
            $status_code = 401;
        }

        $token = JWTAuth::getToken() ? JWTAuth::getToken()->get() : null;

        return response()->json([
            'status' => false,
            'message' => $message,
            'token' => $token,
        ], $status_code);
    }
}
