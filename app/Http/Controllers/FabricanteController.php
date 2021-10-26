<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fabricante;

class FabricanteController extends Controller
{
    public function cadastrofabricante(Request $req)
    {
        $data = new fabricante;

        $data->razao_social_fabricante = $req->razao_social;
        $data->nome_fantasia_fabricante = $req->nomefab;
        $data->cnpj_fabricante = $req->cnpjfab;
        $data->num_rua_fabricante = $req->numfab;
        $data->endereco_fabricante= $req->endfab;
        $data->telefone_fabricante= $req->telefonefab;
        $data->email_fabricante= $req->emailfab;
        $data->observacao_fabricante= $req->emailfab;

        $data->save();


        return redirect()->back();
    }
}
