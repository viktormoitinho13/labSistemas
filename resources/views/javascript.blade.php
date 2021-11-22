    </div> <!-- Fim da div de conteúdo --> 
</div> <!-- Fim do wrapper; -->

<script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script> 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript">
    window.onload=function()
        {
            $(document).ready(function() 
            {
                $('select').formSelect();
            });
        } 
    </script>
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
                        //alert("Erro ao inserir produto.");
                        alert(response.responseJSON.message);
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
                        //alert(response.responseJSON.message);
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
                        //alert(response.responseJSON.message);
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
                        //alert("Erro ao inserir dados.");
                        alert(response.responseJSON.message);
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
                    url: '/procuraProduto',
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

            $('.modal').modal(); //Inicializa os Modals
            
            $(document).on('click', '#editaProduto', function(){
                var produto_id = $(this).attr("produto-id");
                $.ajax({
                    type: "POST",
                    url: '/getDetalhesProduto',
                    datatype: "json",
                    data: {produto_id:produto_id},
                    success: function(data){
                        $('.editProduto').find('input[name="produto_id"]').val(data.detalhes[0].ID_ESTOQUE);
                        $('.editProduto').find('input[name="codigo"]').val(data.detalhes[0].EAN_PRODUTO);
                        $('.editProduto').find('input[name="nome_produto"]').val(data.detalhes[0].NOME_PRODUTO);
                        $('.editProduto').find('input[name="preco"]').val(data.detalhes[0].PRECO_PRODUTO);
                        $('.editProduto').find('input[name="custo"]').val(data.detalhes[0].CUSTO_PRODUTO);
                        $('.editProduto').find('input[name="data_fabricacao"]').val(data.detalhes[0].FABRICACAO_PRODUTO);
                        $('.editProduto').find('input[name="data_vencimento"]').val(data.detalhes[0].VALIDADE_PRODUTO);
                        //$('.editProduto').find('option[id="fabricante_id"]').val(data.detalhes[0].ID_FABRICANTE);
                        $('.editProduto').modal('open');
                    },
                    error: function(data){
                        //console.log(data);
                        alert("Erro ao abrir o modal do produto");
                    }
                });
            });

            $('.form_updateProduto').on('submit', function(e){
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: '/updateProduto',
                    datatype: 'json',
                    data: $('.form_updateProduto').serialize(),
                    success: function(response){
                        $('.editProduto').modal('close');
                        alert("Atualizado com sucesso");
                    },
                    error: function(response){
                        //alert("Erro ao inserir dados.");
                        alert(response.responseJSON.message);
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
                     alert('Erro ao confirmar deleção de produto');
                     console.log(response);
                  }
                });
            });

            $(document).on('click', '#deletaProduto', function(){
                var id_produto = $(this).attr("produto-id");
                $.ajax({
                  type: "delete",
                  url: '/deletaProduto',
                  datatype: 'json',
                  beforeSend:function(){
                     return confirm("Você está prestes a deletar um produto");
                  },
                  data: {CODIGO_INTERNO:id_produto},
                  sucess: function(response){
                     alert('Produto deletado com sucesso');
                  },
                  error: function(response){
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
