<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Labsistemas</title>
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/home.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.js"></script>    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    <script type="text/javascript">
    window.onload=function()
        {
            $(document).ready(function() 
            {
                $('select').material_select();
            });
        } 
    </script>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script> 
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
                    }
                });
            })

            document.querySelector('#submitFuncionario').addEventListener('click', function(){
                $.ajax({
                    type: "POST",
                    url: '/cadastroFuncionario',
                    datatype: 'json',
                    data: $('.formulario_funcionario').serialize(),
                    success: function(response){
                        alert("Dados inseridos com sucessso.");
                    },
                    error: function(response){
                        alert("Erro ao inserir dados.");
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
                    error: function(response2){
                        alert("Erro ao efetuar pesquisa de produtos")
                        console.log(data);
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
                        //alert(data.detalhes[0].NOME_PRODUTO);
                        $('.editProduto').modal('show');
                    },
                    error: function(data){
                        alert(id_produto);
                    }
                });
            });
            

            $(document).on('click', '#deletaProduto', function(){
                var id_produto = $(this).attr("produto-id");
                alert(id_produto);
            });
        });

        function apagarDados(){
            var dadosTabela = document.querySelector('.resultProduto');
            while(dadosTabela.hasChildNodes()){
                dadosTabela.removeChild(dadosTabela.firstChild);
            }
        }
</script> 

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

