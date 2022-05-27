<!-- Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de três notas e as insira em um array, por fim, calcule a média geral. Caso a média seja maior ou igual a seis, exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final calculada. -->

<html>
    <head>
        <title>Desafio 8</title>
        <meta charset="UTF-8">
    </head>

    <body>
        <div class="">
            <form action="" method="GET">
                Insira a 1° nota: <input type="text" name="number1"></br></br>
                Insira a 2° nota: <input type="text" name="number2"></br></br>
                <input type="submit" value="Gerar Resultado">
            </form>
        </div>

        <?php

            $nota1 = $_GET['number1'];
            $nota2 = $_GET['number2'];
            $mediaFinal = ($nota1 + $nota2) / 2;

            if(empty($nota1)) {
                echo "Digite o valor da 1° nota";
            } else if(empty($nota2)) {
                echo "Digite o valor da 2° nota";
            } else if($mediaFinal >= 6) {
                echo "Sua média final foi de $mediaFinal, parabéns, você foi aprovado.";
            } else {
                echo "Sua média final foi de $mediaFinal, infelizmente você foi reprovado.";
            }

        ?>

    </body>
</html>