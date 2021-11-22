<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class AuthController extends Controller
{
    public function loginForm(){
        if(Auth::check()){
            return view('home');
        }
        return view('login');
    }

    public function home(){
        if(Auth::check()){
            
            return view('home');
        }
        return redirect()->route('loginForm');
    }

    public function login(Request $req){
        $user = $req->only('user_adm', 'password');
        if(Auth::attempt($user)){
            $req->session()->regenerateToken();
            return redirect ('home');
        }else{
           return redirect()->back();
        }
    }
    
    public function logout(Request $req){
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('home');
    }
}
