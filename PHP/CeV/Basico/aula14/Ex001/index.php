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

            function somaa($a, $b) {
                $soma = $a + $b;
                echo "Soma de $a + $b = $soma <br>";
            }

            somaa(3, 4);
            somaa(1, 3);

            
            function diferenca($a, $b) { 
                return $a - $b;
            }

            echo diferenca(4,2);


            function Soma() {
                $valores = func_get_args(); //pega os valores passados
                $total = func_num_args(); //pega a quantidade de valores
                $s = 0;

                for ($i=0; $i < $total; $i++) { 
                    $s += $valores[$i];
                }

                return $s;
            }

            $resultado = Soma(5, 2, 7, 1);
            echo "<br>A soma dos valores é: $resultado";

        ?>
    </div>
</body>

</html>