<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Operadores relacionais</title>
</head>

<body>
    <div>
        <h1>Operadores relacionais</h1>
        <?php 

            // operador unário
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $operador = $_GET["op"];

            echo "Valores passados: $n1 e $n2 <br>";

            $resultado = ($operador == "s") ? $n1+$n2 : $n1*$n2;
            echo "Resultado da operação: $resultado <br>";

            $media = ($n1 + $n2) / 2;
            echo "Média do aluno: $media <br>";
            $result_aluno = ($media >= 7) ? "Aprovado" : "Reprovado";
            echo "Situação do aluno: $result_aluno <br>"; 

            $ano_nascimento = $_GET["ano"];
            $idade = 2022 - $ano_nascimento;
            echo "Sua idade: $idade <br>";
            echo "Voto: ". (($idade >= 18) ? "<strong>obrigatório</strong>" : "<strong>opcional</strong>");
        ?>
    </div>
</body>

</html>