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
            // strtolower - transforma todas as letras em minúsculas
            $n = "Arthur Correa";
            echo (strtolower($n));

            echo "<hr>";
            
            // strtoupper - transforma todas as letras em maiúsculas
            echo (strtoupper($n));

            echo "<hr>";

            // stripos - indica em qual posição está a palavra pedida
            $f = "Aprendendo PHP hoje";
            $pos = stripos($f, "PHP");
            echo "A string foi encontrada na posição $pos";

            echo "<hr>";

            // substr - anda nas letras da string (0 começa e 5 conta quanto vai andar)
            $site = "Curso em Video";
            $sub = substr($site, 0, 5);
            echo "$sub";
            // valores negativos farão mostrar as últimas letras da string

            echo "<hr>";

            // str_reapet
            print(str_repeat("a", 20));

            echo "<hr>";

            $frase = "Estudando Python.";
            $novafrase= str_ireplace("Python", "PHP", $frase);
            echo $novafrase;

        ?>
    </div>
</body>

</html>