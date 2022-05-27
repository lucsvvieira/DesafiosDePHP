<!-- Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5". -->

<html>
    <head>
        <title>Desafio 6</title>
        <meta charset="UTF-8">
    </head>

    <body>
        <?php

        $A = 5;
        $B = 4;

            $valores = [
                $A,
                $B
            ];

            $ordemCrescente = sort($valores);

            print_r($valores)
        ?>
    </body>
</html>