<div class="secao-pesquisa">
                <div class="pesquisa">
                    <input type="text" style="width:auto" class="campo-pesquisa">
                    <input class="btn btn-primary" type="" value="Pesquisar">
                </div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Código Interno</th>
                            <th scope="col">Código de Barra</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Custo</th>
                            <th scope="col">Lucro</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($data as $produto)
                        <tr>
                            <td>{{$produto->CODIGO_INTERNO}}</td>
                            <td>{{$produto->CODIGO_BARRA}}</td>
                            <td>{{$produto->NOME_PRODUTO}}</td>
                            <td>{{$produto->PRECO_PRODUTO}}</td>
                            <td>{{$produto->CUSTO_PRODUTO}}</td>
                            <td>{{$produto->LUCRO}}</td>
                            <td><button class="btn btn-default fas fa-pencil-alt" title="Atualizar entrada" name="update"></button></td>
                            <td><button class="btn btn-default fas fa-trash-alt" title="Remover entrada" name="excluir"></button></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>