<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Relacionamento entre Classes</title>
    <style>
        div {
            height: 1000px;
        }
    </style>
</head>

<body>
    <div>
        <?php
            require_once 'Lutador.php';
            require_once 'Luta.php';
            $lutador = array();

            $lutador[0] = new Lutador("Arthur", "Brasil", 19, 1.7, 66, 6, 1, 3);

            $lutador[1] = new Lutador("Lucas", "EUA", 22, 1.97, 70, 8, 0, 2);

            $lutador[2] = new Lutador("Iago", "Canadá", 34, 1.76, 79, 11, 0, 6);

            $lutador[3] = new Lutador("Pedro", "Argentina", 29, 1.66, 76, 8, 5, 2);

            $lutador[4] = new Lutador("João", "França", 37, 1.88, 87, 4, 0, 3);

            $lutador[5] = new Lutador("Mateus", "México", 21, 1.72, 109, 7, 0, 5);

            $lutador[0]->ganharLuta();
            $lutador[0]->apresentar();
            $lutador[5]->status();
            $lutador[3]->status();

            echo '<hr>';
            
            // fazendo uma luta acontecer
            $luta01 = new Luta;
            $luta01->marcarLuta($lutador[4], $lutador[5]);
            $luta01->lutar();

            $lutador[4]->status();
            $lutador[5]->status();
        ?>
    </div>
</body>

</html>