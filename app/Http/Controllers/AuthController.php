<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('pages.auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:1|string|exists:users,username',
            'password' => 'required|min:3|string|exists:users,password'
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors(['message' => 'Invalid username atau password']);

        $user = User::where('username', $request->username)->first();
        Auth::login($user);

        $request->session()->regenerate();

        return redirect()->intended('/');
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();

            return redirect('/login')->with('message', 'Berhasil logout'); 
        }
    }
}
