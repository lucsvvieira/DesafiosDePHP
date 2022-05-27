<!-- 1 - Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, 
    negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero". -->

<?php 

    $numeroDigitado = -1231829323;

    if(empty($numeroDigitado)) {
        echo "Por favor, digite um número";
    } else if (!is_numeric($numeroDigitado)) {
        echo "O valor precisa ser numérico!";
    } else if($numeroDigitado > 0){
        echo "O número digitado foi " .$numeroDigitado.", portanto, valor positivo.";
    } else if($numeroDigitado < 0) {
        echo "O número digitado foi " .$numeroDigitado.", portanto, valor negativo.";
    } else if($numeroDigitado === 0) {
        echo "O número digitado foi " .$numeroDigitado.", portanto, igual a zero.";
    }
?>
     
