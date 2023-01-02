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
                $n = array(5, 6, 7, 9);
                $n[] = 2;
                print_r($n); // usado para testes

                $c = range(5, 20, 5);  // vai de 5 até 50 pulando de 5 em 5
                print_r($c);

                foreach($n as $valor) { // mostra os valores na tela
                    echo "$valor ";
                }

                echo "<hr>";

                // personalizando chaves
                $valores = array(
                    1 => 5,         // no índice 1 o valor é 5 e assim por diante
                    5 => 2,         // não precisa colocar em ordem
                    2 => 1,
                    3 => 7,
                    9 => 3,
                );

                print_r($valores);
                foreach ($valores as $v) {
                    echo "$v ";                
                }
                unset($valores[2]); // deleta o índice 2 do vetor $valores
                echo "<br>";
                print_r($valores);

                echo "<hr>";

                // chaves associativas
                $dados = array(
                    "nome" => "Arthur",
                    "idade" => 19,
                    "peso" => 67
                );

                $dados["treina"] = true;
                foreach ($dados as $campo => $valor) {
                    echo "O campo $campo possui o valor $valor.<br>";
                }

            ?>
        </pre>
    </div>
</body>

</html>