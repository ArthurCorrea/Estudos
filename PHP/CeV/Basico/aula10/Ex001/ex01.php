<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Switch</title>
</head>

<body>
    <div>
        <?php
            $n1 = isset($_GET["n1"]) ? $_GET["n1"] : "0";
            $operacao = isset($_GET["operacao"]) ? $_GET["operacao"] : sqrt($n1);

            switch($operacao) {
                case 1: 
                    $resultado = $n1 * 2;
                    break;
                case 2: 
                    $resultado = $n1 ** 3;
                    break;
                case 3:
                    $resultado = sqrt($n1);
                    break;
            }

            echo "Resultado: $resultado";

        ?>
        <hr>
        <a href="index.html">Voltar</a>
    </div>
</body>

</html>