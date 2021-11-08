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

    public function ListaProdutos(){
        $produtos=DadosProduto::all();
        return response()->json([
            'produtos'=>$produtos,
        ]);
    }

    public function procura(Request $req){
        $procura =  $req->procura;
        $data=DadosProduto::where('CODIGO_INTERNO', 'Like', '%'.$procura.'%')
                            ->orwhere('CODIGO_BARRA','%'.$procura.'%')
                            ->orwhere('NOME_PRODUTO', 'Like', '%'.$procura.'%')->get();
        
        return response()->json([
            'produtos'=>$data,
        ]);
    }
    
    public function logout(Request $req){
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('home');
    }
}
