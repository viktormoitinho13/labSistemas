<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loja;

class LojaController extends Controller
{
    public function cadastroloja(Request $req)
    {
        $data = new loja;

        $data->endereco_loja = $req->end_loja;
        $data->endereco_num_loja = $req->endereco_num_loja;
        $data->cnpj_loja = $req->cnpj_loja;
        $data->telefone_loja = $req->telefone_loja;
        $data->email_loja = $req->email_loja;

        $data->save();


        return redirect()->back();
    }
}
