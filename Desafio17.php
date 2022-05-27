<!-- Escreva um algoritmo que leia a altura e o peso de uma pessoa, calcule o seu IMC (Índice de Massa Corporal) e exiba para o usuário. -->

<html>

    <head>
        <title>Desafio 17</title>
        <meta charset="UTF-8">
    </head>
    
    <body>
        
        <?php

            $altura = 1.70;
            $peso = 21;

            if(empty($altura)) {
                echo "Por favor, digite a altura!";
            } else if(empty($peso)) {
                echo "Por favor, digite o peso!";
            } else if(!is_numeric($altura)) {
                echo "Altura inválida, digite a altura válida! (Ex: 1,70)";
            } else if(!is_numeric($peso)) {
                echo "Peso inválido, digite um peso válido! (Ex: 80)";
            } else {

            $calculoIMC = round($peso / ($altura * $altura), 2);



            echo "Seu IMC é $calculoIMC";

            }
        ?>

    </body>

</html>