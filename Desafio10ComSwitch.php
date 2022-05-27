<html>
    <head>
        <title>Desafio 10 utilizando Switch</title>
        <meta charset="UTF-8">
    </head>

    <body>
        <?php

            $month = [
                1 => 'Janeiro',
                2 => 'Fevereiro',
                3 => 'Março',
                4 => 'Abril',
                5 => 'Maio',
                6 => 'Junho',
                7 => 'Julho',
                8 => 'Agosto',
                9 => 'Setembro',
                10 => 'Outubro',
                11 => 'Novembro',
                12 => 'Dezembro'
            ];

            $month = "";

            switch($month) {
                case 1:
                    echo "Mês de Janeiro";
                break;

                case 2:
                    echo "Mês de Fevereiro";
                break;

                case 3:
                    echo "Mês de Março";
                break;

                case 4:
                    echo "Mês de Abril";
                break;

                case 5:
                    echo "Mês de Maio";
                break;

                case 6:
                    echo "Mês de Junho";
                break;

                case 7:
                    echo "Mês de Julho";
                break;

                case 8:
                    echo "Mês de Agosto";
                break;

                case 9:
                    echo "Mês de Setembro";
                break;

                case 10:
                    echo "Mês de Outubro";
                break;

                case 11:
                    echo "Mês de Novembro";
                break;

                case 12:
                    echo "Mês de Dezembro";
                break;
            }

            if(empty($month)) {
                echo "Por favor digite um mês";
            } 
            
        ?>
    </body>
</html>