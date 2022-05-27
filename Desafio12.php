<!-- Escreva um algoritmo que leia três números nas variáveis Val1, Val2 e Val3, calcule sua média na variável media e exiba para o usuário o resultado -->

<html>

<head>
    <title>Desafio 12</title>
    <meta charset="UTF-8">
</head>

<body>

    <?php

    $Val1 = 2;
    $Val2 = 123123;
    $Val3 = 12312;

    if (empty($Val1)) {
        echo "Digite o 1° valor";
    } else if (empty($Val2)) {
        echo "Digite o 2° valor";
    } else if (empty($Val3)) {
        echo "Digite o 3° valor";
    } else if(!is_numeric($Val1)) {
        echo "O valor 1 precisa ser numérico!";
    } else if(!is_numeric($Val2)){
        echo "O valor 2 precisa ser numérico!";
    } else if(!is_numeric($Val3)) {
        echo "O valor 3 precisa ser numérico!";
    } else {

        $media = ($Val1 + $Val2 + $Val3) / 3;

        echo "O resultado da média foi de $media";
    }
    ?>

</body>

</html>