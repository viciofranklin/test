<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authenticate(AuthRequest $request)
    {
        if(Auth::attempt($request->only(['email','password'])))
        {
            $request->user()->createToken(config('app.token_name'));

            return redirect()->route(config('app.user_home_route_name'));
        }     
    }
    
    public function logout()
    {
        request()->user()->tokens()->delete();

        session()->invalidate();

        session()->regenerateToken();

        return redirect()->route('login');
    }
}
