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
            $dia = isset($_GET["dia"]) ? $_GET["dia"] : "1";

            switch($dia) {
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Estudar!";
                    break;
                case 7:
                case 8:
                    echo "Descansar.";
                    break;
                default:
                    echo "Inválido.";
            }

        ?>
    </div>
</body>
</html>
