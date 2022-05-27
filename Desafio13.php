<!-- Escreva um algoritmo que receba um valor, calcule e mostre para usuário 15% deste valor. -->

<html>
    <head>
        <title>Desafio 13</title>
        <meta charset="UTF-8">
    </head>

    <body>
        
        <?php

            $valor = 2;
            $porcentagem = "dqwqdd";
            $resultado = $valor * ($porcentagem / 100);

            if(empty($valor)) {
                echo "Por favor, digite um valor";
            } else if(!is_numeric($valor)){
                echo "O valor precisa ser numérico!";
            } else if(!is_numeric($porcentagem)) {
                echo "Por favor, defina uma porcentagem válida, (Ex: 10%) !";
            } else {
                echo "15% de $valor é $resultado";
            }
        ?>

    </body>
</html>