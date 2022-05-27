<!-- Escreva um algoritmo que receba o valor de um produto e calcule um desconto de 7%, exibindo para o usuário o valor original, o valor do desconto e o valor com o desconto. -->

<html>

<head>
    <title>Desafio 19</title>
    <meta charset="UTF-8">
</head>

<body>
    <?php

    $valorProduto = 241;
    $porcentagem = 10;

    if (empty($valorProduto)) {
        echo "Por favor, insira o valor do produto!";
        exit();
    } else if (empty($porcentagem)) {
        echo "Por favor, insira a porcentagem!";
        exit();
    } else if (!is_numeric($valorProduto)) {
        echo "Valor inválido, digite apenas números!";
        exit();
    } else if (!is_numeric($porcentagem)) {
        echo "Valor inválido, digite apenas números!";
        exit();
    } else {

        $desconto = $valorProduto * ($porcentagem / 100);
        $valorComDesconto = $valorProduto - $desconto;
    }



    echo "O valor original do produto é $valorProduto reais, o desconto dado foi de $desconto e o valor com o desconto aplicado foi de $valorComDesconto reais."

    ?>
</body>

</html>