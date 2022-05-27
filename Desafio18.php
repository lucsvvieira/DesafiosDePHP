<!-- Escreva um algoritmo que receba um valor, calcule e mostre um desconto de 9%. -->

<html>

<head>
    <title>Desafio 18</title>
    <meta charset="UTF-8">
</head>

<body>

    <?php

    $valor = 2;
    $porcentagem = 23;

    if (empty($valor)) {
        echo "Por favor, digite um valor!";
    } else if (empty($porcentagem)) {
        echo "Por favor, digite a porcentagem!";
    } else if (!is_numeric($valor)) {
        echo "Valor inválido, o valor deve ser numérico!";
    } else if (!is_numeric($porcentagem)) {
        echo "Porcentagem inválida, a porcentagem deve ser numérica!";
    } else {

        $calculoPorcentagem = $valor * ($porcentagem / 100);

        echo "9% de $valor é $calculoPorcentagem";
    }
    ?>

</body>

</html>