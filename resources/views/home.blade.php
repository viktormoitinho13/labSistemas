<!DOCTYPE html>
<html lang="en">

<head>

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
    window.onload=function(){
    $(document).ready(function() {
        $('select').material_select();
    });
    } 

    </script>
   
</head>

<body>

    <div class="wrapper">
        <div class="menu-lateral">
            <ul class="">
                <li><i class="fas fa-fw fa-tachometer-alt"></i> LABSISTEMAS</li>
                <hr class="sidebar-divider">
                <li class="menu-itens btn-home"><i class="fas fa-home"></i> Home</li>
                <li class="menu-itens btn-cadastro-usuario"><i class="fas fa-user-plus"></i> Cadastro de usuário</li>
                <li class="menu-itens btn-consulta-usuario"><i class="fas fa-search"></i> Consulta de usuário</li>
                <li class="menu-itens btn-cadastro-produto"><i class="fas fa-plus-circle"></i> Cadastro de produto</li>
                <li class="menu-itens btn-consulta-produto"><i class="fas fa-search"></i> Consulta de produto</li>
                <li class="menu-itens btn-cadastro-fabricante"><i class="fas fa-plus-circle"></i> Cadastro de fabricante</li>
                <li class="menu-itens btn-cadastro-loja"><i class="fas fa-plus-circle"></i> Cadastro de loja</li>
            </ul>
        </div>

        <div class="content">

            <div class="navbar">

                <div class="user">
                    <i class="fas fa-bell fa-fw"></i>
                    <i class="fas fa-envelope fa-fw"></i>
                    <span>Nome do Usuario<i class="fas fa-user"></i></span>
                </div>
            </div>
        
    
           <!-- COMEÇA AQUI--> 
            <div class="cadastro-form form-usuario">
                <header class="login__header">
                            <b class="banner"><svg color="white" xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/> 
                                    </svg> Cadastro de Funcionário</b>
                </header>
                <div class="login">
                    <form action="{{url('cadastrofuncionario')}}" class="login__form" method="POST">
                        @csrf
                        <div>
                            <label class="titulo" for="nome">NOME</label>
                            <input type="text" id="nome" name="nome" placeholder="Marcelo" required>
                            </div>

                            <div>
                            <label class="titulo" for="nome">SOBRENOME</label>
                            <input type="text" id="nome" name="nome" placeholder="Oliveira da Silva" required>
                            </div>

                            <div>
                            <label class="titulo" for="cpf">CPF</label>
                            <input type="number" id="cpf" name="cpf" placeholder="40033322211" required>
                            </div>

                            <div>
                            <label class="titulo" for="nascimento">DATA DE NASCIMENTO</label>
                            <input type="date" id="nascimento" name="nascimento" placeholder="11/02/1990" required>
                            </div>

                            <div>
                            <select class="titulo" type="text" name="cargo" class="browser-default" required pattern="[1-4]">
                                        <option selected hidden disabled="disabled" selected="selected" value="0">ESCOLHA UM CARGO</option>
                                        <option value="1">GERENTE</option>
                                        <option value="2">CAIXA</option>
                                        <option value="3">ATENDENTE</option>
                                        <option value="4">ENTREGADOR</option>
                            </select>
                            </div>

                            <div>
                            <select required class="titulo" type="text" name="selectloja" required>
                                        <option value="" class="titulo" disabled="disabled" selected="selected" >ESCOLHA A LOJA</option>
                                        <option value="1">LOJA 1 - GUARULHOS</option>
                                        <option value="2">LOJA 2 - VILA GALVÃO</option>
                                        <option value="3">LOJA 3 - JAÇANÃ</option>
                                        <option value="4">LOJA 4 - VILA MARIA</option>
                            </select>
                            </div>

                            <div>
                            <label class="titulo" for="salario">SALÁRIO DO FUNCIONÁRIO</label>
                            <input type="number" id="salario" name="salario" placeholder="1.930,00" required>
                            </div>

                            <div>
                            <input class="button" type="submit" value="Cadastrar">
                            </div>
                    </form>
                </div>  
            </div>

            <!-- COMEÇA O CADASTRO DE PRODUTO-->
            <div class="cadastro-form form-produto">
                    <div class="login">
                        <header class="login__header">
                            <b class="banner"><svg color="white" xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>   
                                    </svg> Cadastro de Produto</b>
                        </header>
                    <form action="{{url('cadastroproduto')}}" class="login__form" method="POST">
                        @csrf
                        <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-upc-scan" viewBox="0 0 16 16">
                                <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z"/>
                                </svg>
                            <label class="titulo" for="codigoproduto">CÓDIGO DO PRODUTO - EAN</label>
                            <input type="number" id="codigo" name="codigo" placeholder="78955825468789" required>
                            </div>

                            <div>
                            <label class="titulo" for="nomeproduto">NOME</label>
                            <input type="text" id="nome" name="nome" placeholder="PARACETAMOL" required>
                            </div>

                            <div>
                            <label class="titulo" for="precoproduto">PREÇO</label>
                            <input type="number" id="preco" name="preco" placeholder="27,80" required>
                            </div>

                            <div>
                            <label class="titulo" for="custoproduto">CUSTO</label>
                            <input type="number" id="custo" name="custo" placeholder="9,47" required>
                            </div>

                            <div>
                            <label class="titulo" for="datafabproduto">DATA DE FABRICAÇÃO</label>
                            <input type="date" id="nascimento" name="nascimento" placeholder="11/02/1990" required>
                            </div>

                            <div>
                            <label class="titulo" for="datavencproduto">DATA DE VENCIMENTO</label>
                            <input type="date" id="nascimento" name="nascimento" placeholder="11/02/1990" required>
                            </div>
                            <div>
                            <select required class="titulo" type="text" name="selectfabricante" required>
                                        <option value="" class="titulo" disabled="disabled" selected="selected" >ESCOLHA A FABRICANTE</option>
                                        <option value="1">EUROFARMA</option>
                                        <option value="2">ULTRAFARMA</option>
                                        <option value="3">TAKEDA</option>
                                        <option value="4">ACHÉ</option>
                            </select>
                            </div>

                            <div>
                            <input class="button" color="black" type="submit" value="Cadastrar Produto">
                            </div>
                    </form>
                </div>
            </div>
            <div class="secao-pesquisa">
                <div class="pesquisa">
                    <input type="text" style="width:auto" class="campo-pesquisa">
                    <input class="btn btn-primary" type="" value="Pesquisar">
                </div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Custo</th>
                            <th scope="col">Validade</th>
                            <th scope="col">Fabricação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Teste</td>
                            <td>R$</td>
                            <td>R$</td>
                            <td>dd/mm/yyyy</td>
                            <td>dd/mm/yyyy</td>
                            <td><button class="btn btn-default fas fa-pencil-alt" name="excluir"></button></td>
                            <td><button class="btn btn-default fas fa-trash-alt" name="excluir"></button></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Teste</td>
                            <td>R$</td>
                            <td>R$</td>
                            <td>dd/mm/yyyy</td>
                            <td>dd/mm/yyyy</td>
                            <td><button class="btn btn-default fas fa-pencil-alt" name="excluir"></button></td>
                            <td><button class="btn btn-default fas fa-trash-alt" name="excluir"></button></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Teste</td>
                            <td>R$</td>
                            <td>R$</td>
                            <td>dd/mm/yyyy</td>
                            <td>dd/mm/yyyy</td>
                            <td><button class="btn btn-default fas fa-pencil-alt" name="excluir"></button></td>
                            <td><button class="btn btn-default fas fa-trash-alt" name="excluir"></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!--COMEÇA AQU CADASTRO DO FABRICANTE-->
            <div class="cadastro-form form-fabricante">
                <div class="login">
                        <header class="login__header">
                            <b class="banner"><svg color="white" xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>   
                                    </svg> Cadastro de Fabricante</b>
                        </header>
                    <form action="{{url('cadastrofabricante')}}" class="login__form" method="POST">
                         @csrf
                            <div>
                            <label class="titulo" for="razaosocial">RAZÃO SOCIAL</label>
                            <input type="text" id="razao_social" name="razao_social" placeholder="EUROFARMA LABORATORIOS S.A." required>
                            </div>
                           
                            <div>
                            <label class="titulo" for="nomefantasia">NOME FANTASIA DO FABRICANTE</label>
                            <input type="text" id="nomefab" name="nomefab" placeholder="EUROFARMA" required>
                            </div>

                            <div>
                            <label class="titulo" for="cnpjfab">CNPJ DO FABRICANTE</label>
                            <input type="text" id="cnpjfab" name="cnpjfab" placeholder="06.626.253/0001-51" required>
                            </div>

                            <div>
                            <label class="titulo" for="numerofab">NÚMERO DO ENDEREÇO DO FABRICANTE</label>
                            <input type="text" id="numfab" name="numfab" placeholder="1020" required>
                            </div>

                            <div>
                            <label class="titulo" for="nomefab">ENDEREÇO DO FABRICANTE</label>
                            <input type="text" id="endfab" name="endfab" placeholder="rua dos reis" required>
                            </div>

                            <div>
                            <label class="titulo" for="telefonefab">TELEFONE DO FABRICANTE</label>
                            <input type="text" id="telefonefab" name="telefonefab" placeholder="0800-704-3876" required>
                            </div>

                            <div>
                            <label class="titulo" for="emailfab">EMAIL DO FABRICANTE</label>
                            <input type="text" id="emailfab" name="emailfab" placeholder="euroatende@eurofarma.com.br" required>
                            </div>

                            <div>
                            <label class="titulo" for="obsfab">OBSERVAÇÃO DO FABRICANTE</label>
                            <input type="text" id="obfab" name="obfab" placeholder="Remédios manipulados">
                            </div>

                            <div>
                            <input class="button" color="black" type="submit" value="Cadastrar Produto">
                            </div>
                    </form>
                </div>
            </div>

            <!-- COMEÇA O CADASTRO DE LOJA-->
            <div class="cadastro-form form-loja">
                <div class="login">
                        <header class="login__header">
                            <b class="banner"><svg color="white" xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>   
                                    </svg> Cadastro de Loja</b>
                        </header>
                    <form action="{{url('cadastroloja')}}" class="login__form" method="POST">
                        @csrf
                        <div>
                        <label class="titulo" for="endloja">ENDEREÇO DA LOJA</label>
                        <input type="text" id="end_loja" name="end_loja" placeholder="Rua Capitão Salvador" required>
                        </div>

                        <div>
                        <label class="titulo" for="numeroloja">NÚMERO DO ENDEREÇO DA LOJA</label>
                        <input type="text" id="endereco_num_loja" name="endereco_num_loja" placeholder="1020" required>
                        </div>

                        <div>
                        <label class="titulo" for="cnpjloja">CNPJ DA LOJA</label>
                        <input type="text" id="cnpj_loja" name="cnpj_loja" placeholder="06.626.253/0001-51" required>
                        </div>

                        <div>
                        <label class="titulo" for="telefoneloja">TELEFONE DA LOJA</label>
                        <input type="text" id="telefone_loja" name="telefone_loja" placeholder="0800-704-3876" required>
                        </div>

                        <div>
                        <label class="titulo" for="emailoja">EMAIL DA LOJA</label>
                        <input type="text" id="email_loja" name="email_loja" placeholder="euroatende@eurofarma.com.br" required>
                        </div>

                        <div>
                        <input class="button" color="black" type="submit" value="Cadastrar Produto">
                        </div>
                    </form>
                </div>
            </div>
        </div>              
    </div>
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

        $(document).ready(function() {
            $("#cargo").formSelect();
        });
    </script>
</body>
