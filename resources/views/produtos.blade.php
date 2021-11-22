        <div class="secao-pesquisa">
                <form class="pesquisa" method="post" placeholder="valor" >
                    @csrf
                    <input type="search" style="width:auto" class="campo-pesquisa" name="procura">
                    <input id="busca" class="btn btn-primary btnpesquisa" type="submit" value="Pesquisar">
                </form>
                <table class="table">
                @include('admin.editProdutoModal')
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
                    </tbody>

                </table>
            </div>