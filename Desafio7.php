<!-- Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que o valor da variável B. A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B” -->

<html>
    <head>
        <title>Desafio 7</title>
        <meta charset="UTF-8">
    </head>

    <?php

        $a = 10;
        $b = 10;

        if(empty($a)) {
            echo "Digite o primeiro valor";
        } else if(empty($b)) {
            echo "Digite o segundo valor";
        } else if (!is_numeric($a)){
            echo "Valor 'a' precisa ser numérico!";
        } else if(!is_numeric($b)) {
            echo "Valor 'b' precisa ser numérico!";
        } else if($a == $b) {
            echo "A igual a B"; 
        } else if($a < $b){
            echo "A menor que B";
        } else {
            echo "A maior que B";
        }

    ?>
</html>