<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class UserAuthController extends Controller
{
    protected $redirectTo = '/login';

    public function login(){
        return view('login');
    }

    public function home(){
        return view('home');
    }

    public function auth(Request $req){
        $user = Usuario::where('id_login', $req->username)
                        #->where('senha_loja', md5($req->password)) #A função md5() converte a senha
                        ->where('senha_loja', $req->password)
                        ->first();
        if($user){
            Auth::login($user);
            $data = $req->input();
            $req->session()->put('username', $data['username']);
            if(Auth::check($user)){
                return redirect('home');
            }else{
                echo "Não autenticado";
            }    
        }else{
            echo "User não encontrado";
        }
    }

    public function logout(Request $req){
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('login');
    }
}
