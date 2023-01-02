<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Funções</title>
</head>

<body>
    <div>
        <h1>Testando funções</h1>
        <?php
            // passagem de parâmetros por referência
            function num(&$x) {
                $x += 5;
                echo "O número X é $x <br>";
            }

            $a = 3;
            num($a);

            echo "O valor de A é $a";
        ?>
    </div>
</body>

</html>