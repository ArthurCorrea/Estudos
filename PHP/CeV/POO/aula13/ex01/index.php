<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo com sobrecarga</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>

<body>
    <div>
        <?php
            require_once 'Mamifero.php';
            require_once 'Lobo.php';
            require_once 'Cachorro.php';
            $m = new Mamifero;
            $m->emitirSom();

            $c = new Cachorro;
            echo '<hr>';
            $c->emitirSom();

            $c->reagirDono(false);
            echo '<hr>';
            $c->reagirFrase('Oi');
            echo '<hr>';
            $c->reagirHora(17);
            echo '<hr>';
            $c->reagirIdadePeso(7, 11);

        ?>
    </div>    
</body>

</html>