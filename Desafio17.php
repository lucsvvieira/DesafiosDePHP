<!-- Escreva um algoritmo que leia a altura e o peso de uma pessoa, calcule o seu IMC (Índice de Massa Corporal) e exiba para o usuário. -->

<html>

    <head>
        <title>Desafio 17</title>
        <meta charset="UTF-8">
    </head>
    
    <body>
        
        <?php

            $altura = 1.70;
            $peso = 80;
            $calculoIMC = round($peso / ($altura * $altura), 2);

            echo "Seu IMC é $calculoIMC";

        ?>

    </body>

</html>