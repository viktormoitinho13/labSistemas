        <div class="secao-pesquisa">
                <form class="pesquisa" method="get" placeholder="valor" action="{{url('procura')}}">
                    @csrf
                    <input type="search" style="width:auto" class="campo-pesquisa" name="procura">
                    <div>
                        <select class="titulo" type="text" name="campo" class="browser-default" required pattern="[1-3]">
                                        <option selected hidden disabled="disabled" selected="selected" value="0">Escolha um campo</option>
                                        <option value="CODIGO_INTERNO">Código Interno</option>
                                        <option value="CODIGO_BARRA">Código de Barra</option>
                                        <option value="NOME_PRODUTO">Nome</option>
                        </select>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Pesquisar">
                </form>
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
                    @if(isset($data))
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

                    @if(method_exists($data,'links'))
                        <div class="d-flex justify-content-center">
                            {!! $data->links() !!}
                        </div>
                    @endif

                    @endif
                    </tbody>

                </table>
            </div>