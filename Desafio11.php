<!-- Escreva um algoritmo para somar dois números e multiplicar o resultado pelo primeiro número. -->

<html>

<head>
    <title>Desafio 11</title>
    <meta charset="UTF-8">
</head>

<body>

    <?php

    $numero1 = 2;
    $numero2 = 10;

    if (empty($numero1)) {
        echo "Por favor, digite o 1° número";
    } else if (empty($numero2)) {
        echo "Por favor, digite o 2° número";
    } else if (!is_numeric($numero1)) {
        echo "O valor de número 1 precisa ser numérico!";
    } else if (!is_numeric($numero2)) {
        echo "O valor de número 2 precisa ser numérico!";
    } else
        $somaDosNumeros = $numero1 + $numero2;
    $resultadoMultiplicado = $somaDosNumeros * $numero1;

    echo "O resultado é $resultadoMultiplicado."

    ?>
</body>

</html>