<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Página de processamentos</h1>
    <?php
        $nome = $_POST['username'];
        $pass = $_POST['password'];
        echo "nome: " .$nome ."<br>";

        if (strlen($pass) < 8)
        {
            echo "Senha não aceita! Precisa de, no mínimo, oito (8) caracteres!" ."<br>";
            echo '<a href="index.html" class="botao">Voltar</a>';
        }
        else
        {
            echo "senha: " .$pass ."<br>";
        }
    ?>
</body>
</html>