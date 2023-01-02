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
            $numero = isset($_GET["numero"]) ? $_GET["numero"] : 2;
            for($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<br>$numero x $i = ". $resultado;
            }
        ?>
        <hr>
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>