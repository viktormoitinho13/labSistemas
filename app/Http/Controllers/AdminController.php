<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class AdminController extends Controller
{
    public function cadastrofuncionario(Request $req)
    {
        $data = new funcionario;

        $data->cpf_func = $req->cpf;
        $data->nome_func = $req->nome;
        $data->sobrenome_func = $req->sobrenome;
        $data->nascimento_func = $req->nascimento;
        $data->salario_func = $req->salario;
        $data->cargo_func = $req->cargo;
        $data->loja_func = $req->loja;
        $data->id_pi = '3';

        $data->save();


        return redirect()->back();
    }
}
