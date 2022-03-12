<?php
//Iniciando a sessão
session_start();
//carregar arquivo de conexão
require_once 'db_connect.php';


if(isset($_POST['btn-create'])):
    $nomeproduto = mysqli_escape_string($connect, $_POST['nome-produto']);
    $valorproduto = mysqli_escape_string($connect, $_POST['valor-produto']);
    $pesoproduto = mysqli_escape_string($connect, $_POST['peso-produto']);
    $quantidadeEstoqueproduto= mysqli_escape_string($connect, $_POST['quantidadeEstoque-produto']);
    $idfornecedor = mysqli_escape_string($connect, $_POST['nome-fornecedor"']);


    $sql = "INSERT INTO produto (nome_produto, valor_produto, peso_produto, quantidadeEstoque_produto, id_fornecedor) 
    VALUES ('$nomeproduto', '$valorproduto', '$pesoproduto', '$quantidadeEstoqueproduto', '$idfornecedor')";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com Sucesso!";
        header('Location: ../produtos.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location: ../produtos.php');
    endif;    

endif;