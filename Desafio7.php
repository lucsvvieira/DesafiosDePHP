<!-- Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que o valor da variável B. A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B” -->

<html>
    <head>
        <title>Desafio 7</title>
        <meta charset="UTF-8">
    </head>

    <?php

        $a = 50;
        $b = 20;

        if(empty($a)) {
            echo "Digite o primeiro valor";
        } else if(empty($b)) {
            echo "Digite o segundo valor";
        } else if($a > $b) {
            echo "A maior que B";
        } else {
            echo "A menor que B";
        }
        

    ?>
</html>