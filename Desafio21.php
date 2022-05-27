<!-- Escreva um algoritmo que receba um valor, calcule e mostre um desconto de 27%. -->

<html>

<head>
    <title>Desafio 21</title>
    <meta charset="UTF-8">
</head>

<body>

    <?php

    $valor = 2340;
    $porcentagem = 27;

    if (empty($valor)) {
        echo "Por favor, digite um valor!";
    } else if (empty($porcentagem)) {
        echo "Por favor, digite a porcentagem!";
    } else if (!is_numeric($valor)) {
        echo "Valor inválido, o valor deve ser numérico!";
    } else if (!is_numeric($porcentagem)) {
        echo "Porcentagem inválida, a porcentagem deve ser numérica!";
    } else {

        $calculaDesconto = $valor * ($porcentagem / 100);

        echo "O desconto dado foi de $calculaDesconto";
    }
    ?>

</body>

</html>