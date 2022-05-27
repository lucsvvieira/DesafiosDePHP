<!-- Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, exiba o resultado na tela. -->

<?php

    $numeroSolicitado = "";
    $calculoFatorial = "";

    if(empty($numeroSolicitado || $calculoFatorial)) {
        echo "Por favor, digite um número";
    }

    while($numeroSolicitado > 1) {
        $calculoFatorial *= $numeroSolicitado;
        $numeroSolicitado--;
    }

    echo $calculoFatorial;
?>