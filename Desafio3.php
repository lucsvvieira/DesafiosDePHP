<!-- Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, exiba o resultado na tela. -->

<?php

$numeroSolicitado = 4;
$calculoFatorial = 5;

if (empty($numeroSolicitado)) {
    echo "Por favor, digite o número solicitado";
    exit();
} else if (empty($calculoFatorial)) {
    echo "Por favor, digite o calculo fatorial";
    exit();
} else if(!is_numeric($numeroSolicitado)) {
    echo "O valor número solicitado precisa ser numérico!";
    exit();
} else if(!is_numeric($calculoFatorial)) {
    echo "O valor cálculo fatorial precisa ser numérico!";
    exit();
}

    while ($numeroSolicitado > 1) {
        $calculoFatorial *= $numeroSolicitado;
        $numeroSolicitado--;
    }


echo $calculoFatorial;
?>