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
            $mediaFinal = (2 * 8.2 + 3 * 10.0 + 5 * 9.5) / (2 + 3 + 5);

            echo "A média final é de $mediaFinal";

        ?>

    </body>

</html>