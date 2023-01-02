<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Estruturas de repetição</title>
</head>

<body>
    <div>
        <form method="get" action="ex01.php">
            <?php
                $c = 1;
                while ($c <= 5) {
                    echo "Valor $c: <input type='number' name='v$c' min='0' max='100' value='0'> <br>";
                    $c++;
                }            
            ?>

            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>