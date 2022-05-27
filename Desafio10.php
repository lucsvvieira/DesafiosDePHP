<!-- Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número. -->

<html>
    <head>
        <title>Desafio 10</title>
        <meta charset="UTF-8">
    </head>

    <body>
        <form action="" method="GET">
            Insira o número do mês desejado: <input type="text" name="month"> </br></br>
            <input type="submit" value="Enviar">
        </form>

        <?php

            $month = $_GET['month'];

            if(empty($month)) {
                echo "Por favor, digite um mês";
            } else if($month == 1) {
                echo " Este número corresponde ao mês de Janeiro";
            } else if($month == 2) {
                echo "Este número corresponde ao mês de Fevereiro";
            } else if($month == 3) {
                echo "Este número corresponde ao mês de Março";
            } else if($month == 4) {
                echo "Este número corresponde ao mês de Abril";
            } else if($month == 5) {
                echo "Este número corresponde ao mês de Maio";
            } else if($month == 6) {
                echo "Este número corresponde ao mês de Junho";
            } else if($month == 7) {
                echo "Este número corresponde ao mês de Julho";
            } else if($month == 8) {
                echo "Este número corresponde ao mês de Agosto";
            } else if($month == 9) {
                echo "Este número corresponde ao mês de Setembro";
            } else if($month == 10) {
                echo "Este número corresponde ao mês de Outubro";
            } else if($month == 11) {
                echo "Este número corresponde ao mês de Novembro";
            } else if($month == 12) {
                echo "Este número corresponde ao mês de Dezembro";
            } else {
                echo "Mês inexistente";
            }           

        ?>
    </body>
</html>