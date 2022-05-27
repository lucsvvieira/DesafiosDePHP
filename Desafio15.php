<!-- Escreva um algoritmo que leia dois números, calcule o quadrado de cada um, some os quadrados e mostre o resultado. -->

<html>

<head>
    <title>Desafio 15</title>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    $numero1 = 21;
    $numero2 = 12;

    if (empty($numero1)) {
        echo "Por favor, digite o número 1!";
    } else if (empty($numero2)) {
        echo "Por favor, digite o número 2!";
    } else if (!is_numeric($numero1)) {
        echo "Valor inválido, número 1 precisa ser numérico!";
    } else if (!is_numeric($numero2)) {
        echo "Valor inválido, número 2 precisa ser númerico!";
    } else {

        $calculoQuadrado1 = 10 * 10;
        $calculoQuadrado2 = 50 * 50;
        $somaQuadrados = $calculoQuadrado1 + $calculoQuadrado2;

        echo "A soma dos Quadrados é $somaQuadrados";
    }
    ?>
</body>

</html>