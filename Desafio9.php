<!-- Crie um algoritmo que pergunte ao usuário seu nome e sua idade. Em seguida verifique se a idade é maior ou menor que 18, exiba da seguinte forma: Fulano é maior de 18 e tem XX Anos ou Fulano não é maior de 18 e tem XX Anos. -->

<html>

    <head>
        <title>Desafio 9</title>
        <meta charset="UTF-8">
    </head>

    <body>
        <form action="" method="GET">
            Qual seu nome? <input type="text" name="name"></br></br>
            Qual sua idade? <input type="text" name="age"></br></br>
            <input type="submit" value="Enviar">
        </form>

        <?php 
        
            $nomeUsuario = $_GET['name'];
            $idadeUsuario = $_GET['age'];

            if(empty($nomeUsuario)) {
                echo "Por favor, digite um nome";
            } else if (empty($idadeUsuario)) {
                echo "Por favor, digite uma idade";
            } else if($idadeUsuario > 18) {
                echo "$nomeUsuario é maior de 18 anos e tem $idadeUsuario anos.";
            } else {
                echo "$nomeUsuario não é maior de 18 e tem $idadeUsuario anos.";
            }

        ?>
    </body>
</html>