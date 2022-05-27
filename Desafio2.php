<!-- 2 - Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado. -->

<?php
    $numeroDigitado = 2;

    if(empty($numeroDigitado)) {
        echo "Por favor, digite um número";
        exit();
    } else if(!is_numeric($numeroDigitado)) {
        echo "Valor precisa ser numérico.";
        exit();
    }

    for($i = 1; $i <= 10; $i++) {
        echo "$numeroDigitado * $i = " . ($numeroDigitado * $i) . "</br>";
    }
?>