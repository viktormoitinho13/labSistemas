<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function cadastroproduto(Request $req)
    {
        $data = new produto;

        $data->ean_produto = $req->codigo;
        $data->nome_produto = $req->nome_produto;
        $data->preco_produto = $req->preco;
        $data->custo_produto = $req->custo;
        $data->validade_produto = $req->data_vencimento;
        $data->fabricacao_produto = $req->data_fabricacao;
        $data->id_fabricante = '1';

        $data->save();


        return redirect()->back();
    }
}
