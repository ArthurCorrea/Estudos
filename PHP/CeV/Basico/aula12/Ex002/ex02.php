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
        
            $valor = isset($_GET["valor"]) ? $_GET["valor"]  : 2;
            $c = $valor;
            $fatorial = 1;

            echo "<h2>Calculando o fatorial de $valor</h2>";

            do {
                $fatorial *= $c;
                $c--;
            }while($c >= 1);
            echo "<h3>$valor! = $fatorial</h3>"
        ?>
        <hr>
        <a href="index.html">Voltar</a>
    </div>
</body>
</html>