<!-- Solicite a entrada de um número e descubra se um número digitado é par ou ímpar. -->

<html>

<head>
    <title>Desafio 5</title>
    <meta charset="UTF-8">
</head>

<body>

    <form action="" method="GET">
        Digite um número: <input type="text" name="number" required>
        <input type="submit" name="submit" value="Enviar">
    </form>

    <?php

    if (isset($_GET['number'])) {
        $numeroDigitado = $_GET['number'];
        if ($numeroDigitado % 2 == 0) {
            echo "$numeroDigitado é par";
        } else {
            echo "$numeroDigitado é impar";
        }
    }

    ?>

</body>

</html>