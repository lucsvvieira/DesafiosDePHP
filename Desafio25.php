<!-- Escreva um algoritmo que receba de entrada a distância total (em km) percorrida por um automóvel e a quantidade de combustível (em litros) consumida para percorrê-la, calcule e imprima o consumo médio de combustível. Fórmula: Consumo médio = Km / litros -->

<html>

<head>
    <title>Desafio 25</title>
    <meta charset="UTF-8">
</head>

<body>

    <?php

    $distanciaEmKM = 600;
    $qtdCombustivel = 45;

    if (empty($distanciaEmKM)) {
        echo "Por favor, digite a distância em KM!";
    } else if (empty($qtdCombustivel)) {
        echo "Por favor, informe a quantidade de combustível!";
    } else if (!is_numeric($distanciaEmKM)) {
        echo "Valor de distância inválido, insira apenas números!";
    } else if (!is_numeric($qtdCombustivel)) {
        echo "Quantidade de combustível inválida, insira apenas números!";
    } else {

        $consumoMedio = $distanciaEmKM / $qtdCombustivel;

        echo "O consumo médio gasto foi de $consumoMedio";
    }
    ?>

</body>

</html>