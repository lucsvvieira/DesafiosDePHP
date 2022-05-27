<!-- Escreva um algoritmo que calcule e apresente o volume de uma caixa retangular por meio da seguinte fórmula: volume = comprimento x largura x altura -->

<html>

<head>
    <title>Desafio 20</title>
    <meta charset="UTF-8">
</head>

<body>
    <?php

    $comprimento = 23;
    $largura = 23;
    $altura = 23;

    if (empty($comprimento)) {
        echo "Por favor, digite o comprimento!";
    } else if (empty($largura)) {
        echo "Por favor, digite a largura!";
    } else if (empty($altura)) {
        echo "Por favor, digite a altura!";
    } else if (!is_numeric($comprimento)) {
        echo "O valor de comprimento precisa ser numérico!";
    } else if (!is_numeric($largura)) {
        echo "O valor de largura precisa ser numérico!";
    } else if (!is_numeric($altura)) {
        echo "O valor de altura precisa ser numérico!";
    } else {

        $volume = $comprimento * $largura * $altura;
        $caixaRetangular = $volume;

        echo "O volume da caixa retangular é de $caixaRetangular";
    }
    ?>
</body>

</html>