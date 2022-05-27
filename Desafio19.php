<!-- Escreva um algoritmo que receba o valor de um produto e calcule um desconto de 7%, exibindo para o usuário o valor original, o valor do desconto e o valor com o desconto. -->

<html>
    <head>
        <title>Desafio 19</title>
        <meta charset="UTF-8">
    </head>

    <body>
        <?php

            $valorProduto = 850;
            $porcentagem = 7;
            $desconto = $valorProduto * ($porcentagem / 100);
            $valorComDesconto = $valorProduto - $desconto;
            

            echo "O valor original do produto é $valorProduto, o desconto dado foi de $desconto e o valor com o desconto aplicado foi de $valorComDesconto."

        ?>
    </body>
</html>