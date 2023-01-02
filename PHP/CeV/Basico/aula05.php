<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">    
    <title>Operadores aritméticos</title>

    <style>
        div {
            height: 600px;
        }
    </style>

</head>

<body>    
    <div>
        <h1>Testando operações</h1>
        <?php

            //usado na URL
            $numero1 = $_GET["a"];
            $numero2 = $_GET["b"];
                        
            echo "<h3>Valores de A e B recebidos: $numero1 e $numero2 </h3>";

            echo "$numero1 + $numero2 = ", ($numero1 + $numero2), "<br>";
            echo "$numero1 - $numero2 = ", ($numero1 - $numero2), "<br>";
            echo "$numero1 * $numero2 = ", ($numero1 * $numero2), "<br>";
            echo "$numero1 / $numero2 = ", ($numero1 / $numero2), "<br>";

            $media = ($numero1 + $numero2) / 2;
            echo "Média entre $numero1 e $numero2 é: ", ($media);
            

            // funções pré-definidas
            echo "<h3>Funções pré-definidas</h3>";
            echo "O valor absoluto de $numero1 é ", abs($numero1), "<br>";

            echo "O valor de $numero1<sup>$numero2</sup> é ", pow($numero1, $numero2), "<br>";

            echo "A raiz quadrada de $numero1 é ", sqrt($numero1), "<br>";
            echo "O valor $numero1 em moeda é R$", number_format($numero1, 2, ","), "<br>";

        ?>
    </div>

</body>

</html>