<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php
        $texto = isset($_GET["texto"]) ? $_GET["texto"] : "[Texto]";
        $tamanho = isset($_GET["tamanho"]) ? $_GET["tamanho"] : "12pt";
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">

    <style>
        .texto {
            font-size: <?php echo $tamanho; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>

    <title>Testando PHP com CSS</title>
</head>

<body>
    <div>
        <?php
            echo "<span class='texto'>$texto</span>";
        ?>
        <hr>
        <a href="index.html">Voltar</a>
    </div>    
</body>

</html>