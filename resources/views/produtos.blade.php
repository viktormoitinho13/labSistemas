        <div class="secao-pesquisa">
                <form class="pesquisa" method="post" placeholder="valor" >
                    @csrf
                    <input type="search" style="width:auto" class="campo-pesquisa" name="procura">
                    <input id="busca" class="btn btn-primary btnpesquisa" type="submit" value="Pesquisar">
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

                    <tbody class="resultProduto">
                    @if(isset($data))
                    

                    @if(method_exists($data,'links'))
                        <div class="d-flex justify-content-center">
                            {!! $data->links() !!}
                        </div>
                    @endif

                    @endif
                    </tbody>

                </table>
            </div>