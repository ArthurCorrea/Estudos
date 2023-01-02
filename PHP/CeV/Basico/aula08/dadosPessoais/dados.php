<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
            $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Não informado]";
            $ano = isset($_GET["ano"]) ? $_GET["ano"] : "[Não informado]";
            $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Sem sexo]";
            $idade = date("Y") - $ano; 
            echo "$nome é $sexo e tem $idade anos.";
        ?>
        <hr>
        <a href="index.html">Voltar</a>
    </div>
</body>

</html>