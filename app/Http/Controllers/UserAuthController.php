<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use App\Models\DadosProduto;

class UserAuthController extends Controller
{
    public function loginForm(){
        return view('login');
    }

    public function home(){
        if(Auth::check()){
            $data=DadosProduto::paginate(5);
            return view('home', compact('data'));
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

    public function procura(Request $req){
        $procura =  $req->procura;
        if(!isset($req->campo)){
            $campo = 'NOME_PRODUTO';
        }$campo = $req->campo;
        $data=DadosProduto::where($campo, 'Like', $procura)->get();
        return view('home', compact('data'));
    }
    
    public function logout(Request $req){
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('home');
    }
}
