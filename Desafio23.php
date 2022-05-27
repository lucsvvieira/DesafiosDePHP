<!-- Escreva um algoritmo que leia 3 notas de um aluno e calcule a média final deste aluno, considerando que a média é ponderada, ou seja, o peso das notas são, respectivamente, 2, 3 e 5. -->

<html>

<head>
    <title>Desafio 23</title>
    <meta charset="UTF-8">
</head>

<body>

    <?php

    $nota1 = 8.2;
    $nota2 = 10.0;
    $nota3 = 9.5;

    if (empty($nota1)) {
        echo "Por favor, digite a 1° nota!";
    } else if (empty($nota2)) {
        echo "Por favor, digite a 2° nota!";
    } else if (empty($nota3)) {
        echo "Por favor, digite a 3° nota!";
    } else if (!is_numeric($nota1)) {
        echo "Valor inválido, a 1° nota deve ter apenas números!";
    } else if (!is_numeric($nota2)) {
        echo "Valor inválido, a 2° nota deve ter apenas números!";
    } else if (!is_numeric($nota3)) {
        echo "Valor inválido, a 3° nota deve ter apenas números!";
    } else {


        $mediaFinal = (2 * 8.2 + 3 * 10.0 + 5 * 9.5) / (2 + 3 + 5);

        echo "A média final é de $mediaFinal";
    }
    ?>

</body>

</html>