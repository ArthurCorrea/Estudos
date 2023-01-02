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
            height: 1200px;
        }
    </style>

</head>

<body>
    <div>
        <pre>
            <?php
                $numeros = array("A", "E", "I", "O", "U");
                $quantidade = count($numeros);
                echo "O vetor tem $quantidade elementos.";

                array_pop($numeros); // elimina o último valor do vetor
                print_r($numeros);

                array_push($numeros, 5); // adiciona o valor na última posição
                print_r($numeros);

                array_unshift($numeros, 2); // adiciona o valor na primeira posição
                print_r($numeros);

                array_shift($numeros); // remove o valor da primeira posição
                print_r($numeros);

                sort($numeros); // coloca o vetor em ordem
                print_r($numeros);

                rsort($numeros); // coloca a ordem ao contrário
                print_r($numeros);

                
                for($i=0; $i<=10; $i++){
                    if($i % 3 == 0)
                            continue;
                    echo $i."-";
         }
         echo "Fim"


            ?>
        </pre>
    </div>
</body>

</html>