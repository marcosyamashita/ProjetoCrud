<?php
//Iniciando a sessão
session_start();
//carregar arquivo de conexão
require_once 'db_connect.php';

if(isset($_POST['btn-update'])):
    $nomeproduto = mysqli_escape_string($connect, $_POST['nome-produto']);
    $valorproduto = mysqli_escape_string($connect, $_POST['valor-produto']);
    $pesoproduto = mysqli_escape_string($connect, $_POST['peso-produto']);
    $quantidadeEstoqueproduto= mysqli_escape_string($connect, $_POST['quantidadeEstoque-produto']);
    $idfornecedor = mysqli_escape_string($connect, $_POST['nome-fornecedor']);


    $id = mysqli_escape_string($connect, $_POST['id']);


    $sql = "UPDATE produto SET nome_produto = '$nomeproduto', valor_produto = '$valorproduto', peso_produto = '$pesoproduto', quantidadeEstoque_produto = '$quantidadeEstoqueproduto', id_fornecedor = '$idfornecedor' WHERE id_produto = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com Sucesso!";
        header('Location: ../produtos.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Atualizar!";
        header('Location: ../produtos.php');
    endif;    

endif;