<!-- Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 5% e 50% deste valor. -->

<html>

<head>
    <title>Desafio 14</title>
    <meta charset="UTF-8">
</head>

<body>

    <?php

    $valor = 4;
    $porcentagem1 = 52;
    $porcentagem2 = 1;
    $resultado1 = $valor * ($porcentagem1 / 100);
    $resultado2 = $valor * ($porcentagem2 / 100);

    if (empty($valor)) {
        echo "Por favor, defina um valor!";
    } else if (empty($porcentagem1)) {
        echo "Por favor, defina a primeira porcentagem!";
    } else if (empty($porcentagem2)) {
        echo "Por favor, defina a segunda porcentagem!";
    } else if (!is_numeric($valor)) {
        echo "O valor precisa ser numérico!";
    } else if (!is_numeric($porcentagem1)) {
        echo "A porcentagem 1 precisa ser numérica!";
    } else if (!is_numeric($porcentagem2)) {
        echo "A porcentagem 2 precisa ser numérica!";
    } else {

        echo "5% de $valor é $resultado1" . "</br></br>" . "50% de $valor é $resultado2";
    }
    ?>

</body>

</html>