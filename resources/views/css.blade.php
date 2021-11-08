<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Labsistemas</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/home.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">    
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
                            $('.resultProduto').append(
                                        '<tr>\
                                <td>'+item.CODIGO_INTERNO+'</td>\
                                <td>'+item.CODIGO_BARRA+'</td>\
                                <td>'+item.NOME_PRODUTO+'</td>\
                                <td>'+item.PRECO_PRODUTO+'</td>\
                                <td>'+item.CUSTO_PRODUTO+'</td>\
                                <td>'+item.LUCRO+'</td>\
                                <td><button class="btn btn-default fas fa-pencil-alt" title="Atualizar entrada" name="update"></button></td>\
                                <td><button class="btn btn-default fas fa-trash-alt" title="Remover entrada" name="excluir"></button></td>\
                                </tr>');
                        });
                    },
                    error: function(response2){
                        //console.log(response2);
                        console.log(data);
                    }
                }); 
            })
        });
        function apagarDados(){
            var dadosTabela = document.querySelector('.resultProduto');
            while(dadosTabela.hasChildNodes()){
                dadosTabela.removeChild(dadosTabela.firstChild);
            }
        }


</script> 

