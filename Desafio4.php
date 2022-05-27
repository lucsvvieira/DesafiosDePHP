<!-- Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão). 
     Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em cada um dos números.  -->

<html>

     <head>
          <title>Operações matemáticas em PHP</title>
          <meta charset="UTF-8">
     </head>

     <h1>Calculadora em PHP</h1>

     <body>
          <form action="" method="POST">
               Primeiro Número: <input name="num1" type="text"></br>
               Segundo Número: <input name="num2" type="text"></br>
               <input type="submit" name="operacao" value="+">
               <input type="submit" name="operacao" value="-">
               <input type="submit" name="operacao" value="*">
               <input type="submit" name="operacao" value="/">
          </form>
     
     <?php
          if($_POST) {
               $numero1 = $_POST['num1'];
               $numero2 = $_POST['num2'];
               $operacao = $_POST['operacao'];
               $resultado = 0;

               if(empty ($numero1)) {
                    echo "Por favor, digite o primeiro número";
                    exit();
               } else if (empty ($numero2)) {
                    echo "Por favor, digite o segundo número";
                    exit();
               } else if(!is_numeric($numero1)) {
                    echo "Valor 1 precisa ser numérico!";
                    exit();
               } else if(!is_numeric($numero2)) {
                    echo "Valor 2 precisa ser numérico!";
                    exit();
               } else if ($operacao == '+') {
                    $resultado = $numero1 + $numero2;
               } else if ($operacao == '-') {
                    $resultado = $numero1 - $numero2;
               } else if ($operacao == '*') {
                    $resultado = $numero1 * $numero2;
               } else {
                    $resultado = $numero1 / $numero2;
               }

               echo "O resultado da operação executada é " . $resultado;
          }
     ?>

     </body>

</html>