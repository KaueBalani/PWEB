<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n1 = intval($_POST["nb1"]);
    $n2 = intval($_POST["nb2"]);
    $op = $_POST["op"];
    $resultado = "Não selecionado alguma opção";
    if ($op == "1")
    {
        $resultado = $n1 + $n2;
    }
    else if ($op == "2")
    {
        $resultado = $n1 - $n2;
    }
    else if ($op == "3")
    {
        $resultado = $n1 * $n2;
    }
    else if ($op == "4")
    {
        $resultado = $n1 / $n2;
    }
    echo "Resultado: " .$resultado;
    ?>
</body>
</html>