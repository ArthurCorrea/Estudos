<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Visibilidade de Classes e Objetos</title>
</head>

<body>
    <div>
        <h3>Visibilidade de Classes e Objetos</h3>
        <pre>
            <?php
                require_once 'Caneta.php';
                $c1 = new Caneta;
                $c1->modelo = "BIC Cristal";
                $c1->cor = "Azul";

                print_r($c1);

                $c1->destampar();
                $c1->rabiscar();
            ?>
        </pre>
    </div>
</body>

</html>