<!-- Escreva um algoritmo que leia a velocidade de um objeto em m/s (metros por segundo), calcule e exiba para o usuário a velocidade em km/h. -->

<html>

    <head>
        <title>Desafio 16</title>
        <meta charset="UTF-8">
    </head>

    <body>
        
        <?php
            $velocidade = 14;
            $metrosPorSegundo = $velocidade / 3.6;
            $kmPorHora = $metrosPorSegundo * 3.6;
            echo "A velocidade convertida é de $velocidade Km por hora.";
        ?>

    </body>

</html>