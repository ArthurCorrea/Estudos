<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        
        $inicio = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
        $fim = isset($_GET["fim"]) ? $_GET["fim"] : 10;
        $i = isset($_GET["incremento"]) ? $_GET["incremento"] : 1;

     ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Estruturas de repetição</title>
</head>

<body>
    <div>
        
        <?php
            if($inicio < $fim) {
                while($inicio <= $fim) {
                    echo "$inicio | ";
                    $inicio += $i;
                    
                } 
            }else {
                while($inicio >= $fim) {
                    echo "$inicio | ";
                    $inicio -= $i;
                }
            }
                    
        ?>

    </div>
</body>

</html>