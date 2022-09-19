<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function login(Request $request){
        $credential = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }
        else{
            return 'failed';
        }

        // if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/');
        // }
        // '1', 'admin', '$2y$10$lzqF2q7Yox9nTzB6U0JbR.lK3AEqQoJfMIMOAYlnmtS2DZrdbTebu', '2022-09-16 06:24:05', '2022-09-16 06:24:05'

    }

    public function auth(){
        return null;
    }
}
