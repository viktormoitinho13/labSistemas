<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;
use App\Models\Produto;
use App\Models\DadosProduto;

class UserController extends Controller
{
    public function ListaProdutos(){
        $produtos=Produto::all();
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

    public function getDetalhesProduto(Request $req){
        $produto_id = $req->produto_id;
        $produto_detalhes = Produto::where('ID_ESTOQUE', $produto_id)->get();
        return response()->json(['detalhes'=>$produto_detalhes]);
    }
}
