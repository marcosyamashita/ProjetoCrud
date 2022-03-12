<?php

//Conexão com o Banco de dados Mysql

$servername = "localhost";
$user = "root";
$pass = "@12345Aa";
$db_name = "testeBackEnd";

$connect = mysqli_connect($servername, $user, $pass, $db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
    echo "Erro de conexão: ". mysqli_connect_error();
endif;    