<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DadosProduto;
use App\Models\Funcionario;
use App\Models\Produto;
use App\Models\Fabricante;
use App\Models\Loja;

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
        $data->loja_func = $req->selectloja;
        $data->save();
        return redirect()->back();
    }


    public function cadastroproduto(Request $req)
    {
        $data = new produto;

        $data->ean_produto = $req->codigo;
        $data->nome_produto = $req->nome_produto;
        $data->preco_produto = $req->preco;
        $data->custo_produto = $req->custo;
        $data->validade_produto = $req->data_vencimento;
        $data->fabricacao_produto = $req->data_fabricacao;
        $data->id_fabricante = $req->selectfabricante; #req->id_fabricante quando o formulário puxar as opções de fabricante pelo banco
        
        $data->save();

        return redirect()->back();
    }
    
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

    public function atualizaProduto(Request $req){
        $id_produto = $req->produto_id;

        $data = Produto::find($id_produto);

        $data->ean_produto = $req->codigo;
        $data->nome_produto = $req->nome_produto;
        $data->preco_produto = $req->preco;
        $data->custo_produto = $req->custo;
        $data->validade_produto = $req->data_vencimento;
        $data->fabricacao_produto = $req->data_fabricacao;
        $data->id_fabricante = "3"; #req->id_fabricante quando o formulário puxar as opções de fabricante pelo banco
            
        $data->save();

        return redirect()->back();
    }

    public function deletaProduto(Request $req){
  
        $produto=Produto::find($req->CODIGO_INTERNO);
        $produto->delete(); //returns true/false
    }
}
