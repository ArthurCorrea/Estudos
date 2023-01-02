<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Funções pré-definidas</title>

    <style>
        div {
            height: 600px;
        }
    </style>

</head>

<body>
    <div>
        <?php
            // printf - faz uma formatação mais simples
            $produto = "Leite";
            $preco = 4.5;
            printf("O %s custa R$%.2f", $produto, $preco);
            /*
            %d - valores decimais
            %u - valores decimais sem sinal
            %f - valores reais
            %s - strings
            */

            echo "<hr>";

            // print_r - usado para mostrar vetores
            $x[0] = 5;
            $x[1] = 4;
            $x[2] = 2;
            print_r($x);
            // usado para testes

            echo "<hr>";

            // wordwrap
            $texto = "Exemplo de string grande pra ver o funcionamento da função wordwrap";
            echo wordwrap($texto, 30, "<br>");
            // quebra o texto visualmente e/ou no código-fonte

            echo "<hr>";

            // strlen - mostra o tamanho da string
            $txt = "Arthur Vinicius Correa";
            echo strlen($txt);

            echo "<hr>";

            // str_word_count - quantidade de palavras dentro da string
            $f = "palavra1 palavra2 palavra3 palavra4";
            $cont = str_word_count($f);
            echo $cont;

            echo "<hr>";

            // explode - "explode" uma string a cada espaço e coloca num vetor
            $site = "Curso em Video";
            $vetor = explode(" ", $site);
            print_r($vetor);

            echo "<hr>";

            // str_split - cada letra da string vira um índice de um vetor
            $p = "Arthur";
            print_r(str_split($p));

            echo "<hr>";

            // ord - mostra o código da letra
            $letra = "y";
            $codigo = ord($letra);
            print("A letra $letra tem o código $codigo.");
        ?>
    </div>
</body>

</html>