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
        <h1>Dados no PHP</h1>
        <?php 
            $valor = $_GET["valor"];
            $raiz = sqrt($valor);
            echo "Valor enviado: $valor <br>";
            echo "Raiz quadrada de $valor: ". number_format($raiz, 2);
        ?>
        <hr>
        <a href="index.html">Voltar</a>
    </div>
</body>
</html>