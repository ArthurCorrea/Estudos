<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Vetores e matrizes</title>

    <style>
        div {
            height: 900px;
        }
    </style>

</head>

<body>
    <div>
        <pre>
            <?php
                // matrizes em PHP

                $numeros = array(
                    array(5, 2),
                    array(3, 8),
                    array(7, 6)  
                );

                print_r($numeros);
                $numeros[1][1] = $numeros[0][1];

                print_r($numeros)

            ?>
        </pre>
    </div>
</body>

</html>

     