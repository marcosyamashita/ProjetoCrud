<?php
//Iniciando a sessão
session_start();
//carregar arquivo de conexão
require_once 'db_connect.php';

if(isset($_POST['btn-create'])):
    $nomeFornecedor = mysqli_escape_string($connect, $_POST['nome-fornecedor']);
    $emailFornecedor = mysqli_escape_string($connect, $_POST['email-fornecedor']);
    $cnpj = mysqli_escape_string($connect, $_POST['cnpj']);
    $razaoSocial = mysqli_escape_string($connect, $_POST['razao-social']);
    $nomeFantasia = mysqli_escape_string($connect, $_POST['nome-fantasia']);
    $telefoneFornecedor = mysqli_escape_string($connect, $_POST['telefone-fornecedor']);
    $celularVendedor = mysqli_escape_string($connect, $_POST['celular-vendedor']);


    $sql = "INSERT INTO fornecedores (nome_fornecedor, email_fornecedor, cnpj_fornecedor, razaoSocial_fornecedor, nomeFantasia_fornecedor, telefone_fornecedor, celular_vendedor) 
    VALUES ('$nomeFornecedor', '$emailFornecedor', '$cnpj', '$razaoSocial', '$nomeFantasia', '$telefoneFornecedor', '$celularVendedor')";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com Sucesso!";
        header('Location: ../fornecedores.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location: ../fornecedores.php');
    endif;    

endif;