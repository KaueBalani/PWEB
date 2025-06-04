<?php
    $nome = $_POST["nm"];
    $msg = $_POST["recado"];
    if (isset($_POST["cine"])) $cine = $_POST["cine"];
    else $cine = "-1";
    if (isset($_POST["esp"])) $esp = $_POST["esp"];
    else $esp = "-1";
    if (isset($_POST["jooj"])) $jooj = $_POST["jooj"];
    else $jooj = "-1";
    $gen = $_POST["gen"];
    $est = $_POST["uf"];
    echo "Nome = " .$nome ."<br>";
    echo "Mensagem = " .$msg ."<br>";
    if ($cine == "cinema") echo "Cinema? " ."Sim!<br>";
    else echo "Cinema? " ."Não!<br>";
    if ($esp == "esporte") echo "Esporte? " ."Sim!<br>";
    else echo "Esporte? " ."Não!<br>";
    if ($jooj == "jogo") echo "Jogo? " ."Sim!<br>";
    else echo "Jogo? " ."Não!<br>";
    
    echo "Gênero = " .$gen ."<br>";
    echo "Estado: " .$est ."<br>";
?>