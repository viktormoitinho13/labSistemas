<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class UserAuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function home(){
        return view('home');
    }

    public function auth(Request $req){
        $user = Usuario::where('username', $req->username)
                        ->where('password', $req->password)
                        ->first();

        if($user){
            Auth::login($user);
            $data = $req->input();
            $req->session()->put('username', $data['username']);
            return redirect('home');
        }else{
            return back()->withErrors([
                'username' => 'Usuário não encontrado no sistema.',
            ]);
        }
    }

    public function logout(Request $req){
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('login');
    }
}
