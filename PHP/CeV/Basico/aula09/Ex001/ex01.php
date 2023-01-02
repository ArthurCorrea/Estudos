<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Estruturas condicionais</title>
</head>

<body>
    <div>
        <h1>Condições</h1>
        <?php
            $ano = isset($_GET["ano"]) ? $_GET["ano"] : "Não informado";
            $idade = date("Y") - $ano;
            echo "Você nasceu em $ano e tem $idade anos. <br>";

            if($idade < 16) {
                $votar = "não pode votar";
                $dirigir = "não pode dirigir";
            } else if (($idade >= 16 && $idade < 18) || ($idade >= 65)) {
                $votar = "vota opcionalmente";
                $dirigir = $idade < 18 ? "não pode dirigir" : "pode dirigir";
            } else {
                $votar = "vota obrigatoriamente";
                $dirigir = "pode dirigir";
            }

            echo "Você $votar e $dirigir!"  ;
            

        ?>
    </div>    
</body>

</html>