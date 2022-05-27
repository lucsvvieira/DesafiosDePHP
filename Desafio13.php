<!-- Escreva um algoritmo que receba um valor, calcule e mostre para usuário 15% deste valor. -->

<html>
    <head>
        <title>Desafio 13</title>
        <meta charset="UTF-8">
    </head>

    <body>
        
        <?php

            $valor = "";
            $porcentagem = 15;
            $resultado = $valor * ($porcentagem / 100);

            if(empty($valor)) {
                echo "Por favor, digite um valor";
            } else {
                echo "15% de $valor é $resultado";
            }
            

        ?>

    </body>
</html>