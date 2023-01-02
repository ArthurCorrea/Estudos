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
            $n1 = isset($_GET["n1"]) ? $_GET["n1"] : "0";
            $n2 = isset($_GET["n2"]) ? $_GET["n2"] : "0";
            $media = ($n1 + $n2) / 2;
            if($media >= 7) {
                $situacao = "aprovado";
            } else if($media >= 5 && $media < 7) {
                $situacao = "de recuperação";
            } else {
                $situacao = "reprovado";
            }
            echo "Sua média é ". number_format($media, 2);
            echo "<br >Você está $situacao!";
        ?>
    </div>
</body>

</html>