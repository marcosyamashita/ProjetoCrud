<?php
//Iniciando a sessão
session_start();
//carregar arquivo de conexão
require_once 'db_connect.php';

if(isset($_POST['btn-update'])):
    $nomeFornecedor = mysqli_escape_string($connect, $_POST['nome-fornecedor']);
    $emailFornecedor = mysqli_escape_string($connect, $_POST['email-fornecedor']);
    $cnpj = mysqli_escape_string($connect, $_POST['cnpj']);
    $razaoSocial = mysqli_escape_string($connect, $_POST['razao-social']);
    $nomeFantasia = mysqli_escape_string($connect, $_POST['nome-fantasia']);
    $telefoneFornecedor = mysqli_escape_string($connect, $_POST['telefone-fornecedor']);
    $celularVendedor = mysqli_escape_string($connect, $_POST['celular-vendedor']);

    $id = mysqli_escape_string($connect, $_POST['id']);


    $sql = "UPDATE fornecedores SET nome_fornecedor = '$nomeFornecedor', email_fornecedor = '$emailFornecedor', cnpj_fornecedor = '$cnpj', razaoSocial_fornecedor = '$razaoSocial', nomeFantasia_fornecedor = '$telefoneFornecedor', celular_vendedor = '$celularVendedor' WHERE id_fornecedor = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com Sucesso!";
        header('Location: ../fornecedores.php');
    else:
        $_SESSION['mensagem'] = "Erro ao Atualizar!";
        header('Location: ../fornecedores.php');
    endif;    

endif;