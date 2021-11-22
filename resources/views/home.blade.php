<!DOCTYPE html>
<html lang="en">
<head>
    @include('css')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>

    @include('sidebar')
    @include('navbar')
        @include('admin.cadastroFuncionario')
        @include('admin.cadastroProduto')
        @include('produtos')
        @include('admin.cadastroFabricante')
        @include('admin.cadastroLoja')
        
    @include('javascript')
</body>
