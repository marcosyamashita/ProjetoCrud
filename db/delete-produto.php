<?php
//Iniciando a sessão
session_start();
//carregar arquivo de conexão
require_once 'db_connect.php';

if(isset($_POST['btn-delete'])):

    $id = mysqli_escape_string($connect, $_POST['id']);


    $sql = " DELETE FROM produto WHERE id_produto = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Deletado com Sucesso!";
        header('Location: ../produtos.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Deletar!";
        header('Location: ../produtos.php');
    endif;    

endif;