<!DOCTYPE html>
<html lang="en">
<head>
    @include('css')
</head>
<body>

    @include('sidebar')
    @include('navbar')

        @include('admin.cadastroFuncionario')
        @include('admin.cadastroProduto')
        @include('consultaProduto')
        @include('admin.cadastroFabricante')
        @include('admin.cadastroLoja')
        
    @include('javascript')
</body>
