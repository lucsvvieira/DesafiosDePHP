<!-- Escreva um algoritmo que receba dois valores, calcule e apresente a área de um trapézio. -->

<html>

<head>
    <title>Desafio 22</title>
    <meta charset="UTF-8">
</head>

<body>

    <?php

    $baseMaior = 50;
    $baseMenor = 32;
    $altura = 60;

    if (empty($baseMaior)) {
        echo "Por favor, informe a base maior!";
    } else if (empty($baseMenor)) {
        echo "Por favor, informe a base menor!";
    } else if (empty($altura)) {
        echo "Por favor, informe a altura!";
    } else if (!is_numeric($baseMaior)) {
        echo "Valor inválido, o valor da base maior deve ser numérica!";
    } else if (!is_numeric($baseMenor)) {
        echo "Valor inválido, o valor da base menor deve ser numérica!";
    } else if (!is_numeric($altura)) {
        echo "Valor inválido, a altura deve ser um valor numérico!";
    } else {

        $areaTrapezio = ($baseMaior + $baseMenor) * $altura / 2;

        echo "A área do trapézio é de $areaTrapezio";
    }

    ?>

</body>

</html>