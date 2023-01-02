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
            $acumulador = 0;
            for($i = 1; $i<= $numero; $i++){
                $resultado = $numero % $i;
                if($resultado == 0) {
                    $acumulador++;
                }
            }

            if($acumulador > 2){
                echo "<br>Total de múltiplos: $acumulador";
                echo "<br>$numero NÃO É PRIMO!";
            } else {
                echo "<br>Total de múltiplos: $acumulador";
                echo "<br>$numero É PRIMO!";
            }
            

        ?>
    </div>
</body>
</html>