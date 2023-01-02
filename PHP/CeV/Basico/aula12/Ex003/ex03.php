<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Estrutura de repetição</title>
</head>
<body>
    <div>
        <?php
            $valor = isset($_GET["valor"]) ? $_GET["valor"] : 2;
            $i = 1;

            do {
                echo "<br>$valor x $i = ". ($valor*$i);
                $i++;
            } while ($i <= 10);

            // for ($i = 1; $i <= 10; $i++) { 
            //     echo "<br>$valor x $i = ". ($valor*$i);
            // }

        ?>
        <hr>
        <a href="index.html">Voltar</a>
    </div>
</body>
</html>