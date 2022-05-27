<!-- Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 5% e 50% deste valor. -->

<html>
    <head>
        <title>Desafio 14</title>
        <meta charset="UTF-8">
    </head>

    <body>
        
        <?php

            $valor = 100;
            $porcentagem1 = 5;
            $porcentagem2 = 50;
            $resultado1 = $valor * ($porcentagem1 / 100);
            $resultado2 = $valor * ($porcentagem2 / 100);

            echo "5% de $valor é $resultado1" . "</br></br>" . "50% de $valor é $resultado2";

        ?>

    </body>
</html>