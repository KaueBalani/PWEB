<?php
    $hostname = "localhost";
    $database = "cadastrado";
    $username = "root";
    $pass = "";
    $porta = 3306;
    // Criando a conexao com o MySQL
    $conn = new mysqli($hostname, $username, $pass, $database, $porta);

    if ($conn) echo "conectado!";
    else echo "conexao falhou!";
?>