    </div> <!-- Fim da div de conteúdo --> 
</div> <!-- Fim do wrapper; -->

<script>
        document.querySelector('.btn-cadastro-usuario').addEventListener('click', function(){
           document.querySelector('.form-produto').setAttribute('style', 'display:none');
           document.querySelector('.secao-pesquisa').setAttribute('style', 'display:none');
           document.querySelector('.form-fabricante').setAttribute('style', 'display:none');
           document.querySelector('.form-loja').setAttribute('style', 'display:none');
           document.querySelector('.form-usuario').setAttribute('style', 'display:block');
        });

        document.querySelector('.btn-cadastro-produto').addEventListener('click', function(){
           document.querySelector('.form-usuario').setAttribute('style', 'display:none');
           document.querySelector('.secao-pesquisa').setAttribute('style', 'display:none');
           document.querySelector('.form-fabricante').setAttribute('style', 'display:none');
           document.querySelector('.form-loja').setAttribute('style', 'display:none');
           document.querySelector('.form-produto').setAttribute('style', 'display:block');
        });

        document.querySelector('.btn-consulta-produto').addEventListener('click', function(){
           document.querySelector('.form-usuario').setAttribute('style', 'display:none');
           document.querySelector('.form-produto').setAttribute('style', 'display:none');
           document.querySelector('.form-fabricante').setAttribute('style', 'display:none');
           document.querySelector('.form-loja').setAttribute('style', 'display:none');
           document.querySelector('.secao-pesquisa').setAttribute('style', 'display:block');
        });

        document.querySelector('.btn-cadastro-fabricante').addEventListener('click', function(){
           document.querySelector('.form-usuario').setAttribute('style', 'display:none');
           document.querySelector('.form-produto').setAttribute('style', 'display:none');
           document.querySelector('.secao-pesquisa').setAttribute('style', 'display:none');
           document.querySelector('.form-loja').setAttribute('style', 'display:none');
           document.querySelector('.form-fabricante').setAttribute('style', 'display:block');
        });

        document.querySelector('.btn-cadastro-loja').addEventListener('click', function(){
           document.querySelector('.form-usuario').setAttribute('style', 'display:none');
           document.querySelector('.form-produto').setAttribute('style', 'display:none');
           document.querySelector('.secao-pesquisa').setAttribute('style', 'display:none');
           document.querySelector('.form-fabricante').setAttribute('style', 'display:none');
           document.querySelector('.form-loja').setAttribute('style', 'display:block');
        });

        document.querySelector('.input-fabricacao').addEventListener("focusout", function(){
            this.type = 'text';
            this.placeholder = 'Data de Fabricação';
        });
        document.querySelector('.input-validade').addEventListener("focusout", function(){
            this.type = 'text';
            this.placeholder = 'Data de Validade';
        }); 
    </script>

    <script>
        $(document).ready(function(){
            document.querySelector('.submitProduto').addEventListener('click', function(e){
                $.ajax({
                    type: "POST",
                    url: '/cadastroproduto',
                    datatype: 'json',
                    data: $('.formulario_produto').serialize(),
                    success: function(data){
                        alert("Dados cadastrados com sucesso");
                    },
                    error: function(data){
                        alert("Erro ao inserir produto.");
                        console.log(data);
                    }
                }); 
            })

            document.querySelector('#submitLoja').addEventListener('click', function(){
                $.ajax({
                    type: "POST",
                    url: '/cadastroloja',
                    datatype: 'json',
                    data : $('.formulario_loja').serialize(),
                    success: function(data){
                        alert("Dados cadastrados com sucesso.");
                    },
                    error: function(data){
                        alert("Erro ao inserir loja.");
                        console.log(data);
                    }
                }); 
            })

            document.querySelector('#submitFabricante').addEventListener('click', function(){
                $.ajax({
                    type: "POST",
                    url: 'cadastrofabricante',
                    datatype: 'json',
                    data: $('.formulario_fabricante').serialize(),
                    success: function(response){
                        alert('Fabricante inserido com sucesso');
                    },
                    error: function(response){
                        alert('Erro ao inserir fabricante.');
                        console.log(response)
                    }
                });
            })

            document.querySelector('#submitFuncionario').addEventListener('click', function(){
                $.ajax({
                    type: "POST",
                    url: '/cadastrofuncionario',
                    datatype: 'json',
                    data: $('.formulario_funcionario').serialize(),
                    success: function(response){
                        alert("Dados inseridos com sucessso.");
                    },
                    error: function(response){
                        alert("Erro ao inserir dados.");
                        console.log(response);
                    }
                });
            })

            document.querySelector('#busca').addEventListener('click', function(e){
                e.preventDefault();
                apagarDados();
                var dados = document.querySelector('.campo-pesquisa').value;
                console.log(dados);
                $.ajax({
                    type: "POST",
                    url: '/procura',
                    datatype: 'json',
                    data: { 'procura':dados, _token: '{{csrf_token()}}' },
                    success: function(response){
                        $.each(response.produtos, function(key, item){
                            $('.resultProduto').append
                            (
                                '<tr>\
                                    <td>'+item.CODIGO_INTERNO+'</td>\
                                    <td>'+item.CODIGO_BARRA+'</td>\
                                    <td>'+item.NOME_PRODUTO+'</td>\
                                    <td>'+item.PRECO_PRODUTO+'</td>\
                                    <td>'+item.CUSTO_PRODUTO+'</td>\
                                    <td>'+item.LUCRO+'</td>\
                                    <td><button id="editaProduto" produto-id="'+item.CODIGO_INTERNO+'" class="btn btn-default fas fa-pencil-alt" title="Atualizar entrada" name="update"></button></td>\
                                    <td><button id="deletaProduto" produto-id="'+item.CODIGO_INTERNO+'" class="btn btn-default fas fa-trash-alt" title="Remover entrada" name="excluir"></button></td>\
                                </tr>'
                                );
                        });
                    },
                    error: function(response){
                        alert("Erro ao efetuar pesquisa de produtos")
                        console.log(response);
                    }
                }); 
            })

            $(document).on('click', '#editaProduto', function(){
                var produto_id = $(this).attr("produto-id");
                $.ajax({
                    type: "POST",
                    url: '/getDetalhesProduto',
                    datatype: "json",
                    data: {produto_id:produto_id},
                    success: function(data){
                        // alert(data.detalhes[0].NOME_PRODUTO);

                        
                        $('.editProduto').modal('show');
                    },
                    error: function(data){
                        console.log(data);
                    }
                });
            });
            

            $(document).on('click', '#deletaProduto', function(){
                var id_produto = $(this).attr("produto-id");
                $.ajax({
                  type: "delete",
                  url: '/deletaProduto',
                  datatype: 'json',
                  data: {CODIGO_INTERNO:id_produto},
                  sucess: function(response){
                     alert('Produto deletado com sucesso');
                  },
                  error: function(response){
                     alert('Erro ao deletar produto');
                     console.log(response);
                  }
                });
            });
        });

        function apagarDados(){
            var dadosTabela = document.querySelector('.resultProduto');
            while(dadosTabela.hasChildNodes()){
                dadosTabela.removeChild(dadosTabela.firstChild);
            }
        }
</script> 

<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>