<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/home.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   
</head>

<body>

    <div class="wrapper">
        
        <div class="menu-lateral">
            <ul class="">
                <li><i class="fas fa-fw fa-tachometer-alt"></i> LABSISTEMAS</li>
                <hr class="sidebar-divider">
                <li class="menu-itens btn-home"><i class="fas fa-home"></i> Home</li>
                <li class="menu-itens btn-cadastro-usuario"><i class="fas fa-user"></i> Cadastro de usuário</li>
                <li class="menu-itens btn-cadastro-produto"><i class="fas fa-boxes"></i> Cadastro de produto</li>
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
                    <form action="" class="login__form" method="POST">
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
                            <select class="titulo" type="text" name="cargo" class="browser-default" required>
                                        <option selected hidden>Escolha um cargo</option>
                                        <option value="1">Gerente</option>
                                        <option value="2">Caixa</option>
                                        <option value="3">Atendente</option>
                                        <option value="4">Entregador</option>
                            </select>
                            </div>

                            <div>
                            <select class="titulo" type="text" name="loja" class="browser-default" required>
                                        <option selected hidden value="">Defina a Loja</option>
                                        <option value="1">LOJA 1 - Guarulhos</option>
                                        <option value="2">LOJA 2 - Vila-Galvão</option>
                                        <option value="3">LOJA 3 - Jaçanã</option>
                                        <option value="4">LOJA 4 - Vila Maria</option>
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
                    <form action="#" class="login__form" method="POST">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-upc-scan" viewBox="0 0 16 16">
                                <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z"/>
                                </svg>
                            <label class="titulo" for="codigo">CÓDIGO DO PRODUTO - EAN</label>
                            <input type="number" id="codigo" name="codigo" placeholder="78955825468789" required>
                            </div>

                            <div>
                            <label class="titulo" for="nome">NOME</label>
                            <input type="text" id="nome" name="nome" placeholder="PARACETAMOL" required>
                            </div>

                            <div>
                            <label class="titulo" for="nome">CNPJ DO FABRICANTE</label>
                            <input type="text" id="nome" name="nome" placeholder="06.626.253/0001-51" required>
                            </div>

                            <div>
                            <label class="titulo" for="nome">NOME DO FABRICANTE</label>
                            <input type="text" id="nome" name="nome" placeholder="EUROFARMA" required>
                            </div>

                            <div>
                            <label class="titulo" for="nome">TELEFONE DO FABRICANTE</label>
                            <input type="text" id="nome" name="nome" placeholder="0800-704-3876" required>
                            </div>

                            <div>
                            <label class="titulo" for="nome">EMAIL DO FABRICANTE</label>
                            <input type="text" id="nome" name="nome" placeholder="euroatende@eurofarma.com.br" required>
                            </div>

                            <div>
                            <label class="titulo" for="preco">PREÇO</label>
                            <input type="number" id="preco" name="preco" placeholder="27,80" required>
                            </div>

                            <div>
                            <label class="titulo" for="custo">CUSTO</label>
                            <input type="number" id="custo" name="custo" placeholder="9,47" required>
                            </div>

                            <div>
                            <label class="titulo" for="nascimento">DATA DE FABRICAÇÃO</label>
                            <input type="date" id="nascimento" name="nascimento" placeholder="11/02/1990" required>
                            </div>

                            <div>
                            <label class="titulo" for="nascimento">DATA DE VENCIMENTO</label>
                            <input type="date" id="nascimento" name="nascimento" placeholder="11/02/1990" required>
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
           document.querySelector('.form-usuario').setAttribute('style', 'display:block');
        });

        document.querySelector('.btn-cadastro-produto').addEventListener('click', function(){
           document.querySelector('.form-usuario').setAttribute('style', 'display:none');
           document.querySelector('.form-produto').setAttribute('style', 'display:block');
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

</body>
