<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LabSistemas</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">


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
        
    
            <div class="cadastro-form form-usuario">
                <h2>CADASTRO DE USUÁRIO</h2>
               <form>
                    <input type="text" placeholder="Nome Completo">
                    <input type="text" placeholder="E-mail">
                    <input type="text" placeholder="Telefone">
                    <input type="text" placeholder="Endereço">
                    <br><br><br>
                    <button type="submit">CADASTRAR</button>
               </form>

            </div>

            <div class="cadastro-form form-produto">
                <h2>CADASTRO DE PRODUTO</h2>
               <form>
                    <input type="text" placeholder="Nome do Produto">
                    <input type="text" placeholder="Preço">
                    <input type="text" placeholder="Custo">
                    <input type="text" placeholder="Código de Barras">
                    <input class="input-fabricacao" placeholder="Data de Fabricação" type="text" onfocus="(this.type = 'date')">
                    <input class="input-validade" placeholder="Data de Validade" type="text"  onfocus="(this.type = 'date')" >
                    <br><br><br>
                    <button type="submit">CADASTRAR</button>
               </form>
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
