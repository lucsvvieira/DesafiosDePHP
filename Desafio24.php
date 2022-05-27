<!-- Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor, divida em 10 parcelas e mostre para o usuário o valor da parcela e o valor total da compra. -->

<html>

<head>
    <title>Desafio 24</title>
    <meta charset="UTF-8">
</head>

<body>

    <?php

    $valorProduto = 2300;
    $porcentagem = 16 / 100 + 1;

    if (empty($valorProduto)) {
        echo "Por favor, digite o valor do produto!";
    } else if (empty($porcentagem)) {
        echo "Por favor, digite a porcentagem!";
    } else if (!is_numeric($valorProduto)) {
        echo "Valor inválido, o valor do produto deve ser numérico!";
    } else if (!is_numeric($porcentagem)) {
        echo "Valor inválido, a porcentagem deve ser numérica!";
    } else {

        $produtoComPorcentagem = $valorProduto + $porcentagem;
        $parcelasProduto = $produtoComPorcentagem / 10;

        echo "O valor da parcela ficou em $parcelasProduto, o valor total é de $produtoComPorcentagem.";
    }
    ?>

</body>

</html>