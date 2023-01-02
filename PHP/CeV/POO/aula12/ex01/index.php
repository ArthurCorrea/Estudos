<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Polimorfismo com sobreposição</title>
</head>
<body>
    <div>
        <pre>
            <?php
                require_once 'Animal.php';
                require_once 'Mamifero.php';
                require_once 'Reptil.php';
                require_once 'Peixe.php';
                require_once 'Ave.php';
                require_once 'Canguru.php';
                require_once 'Cachorro.php';
                $m = new Mamifero;
                $m->setPeso(66.5);
                $m->setIdade(3);

                $m->locomover(); // correndo
                $m->alimentar(); // mamando
                print_r($m);

                echo '<hr>';
                $r = new Reptil;
                $r->setMembros(4);

                // POLIMORFISMO acontece chamando o mesmo MÉTODO de objetos diferentes e eles realizam ações diferentes
                // o que está acontecendo é uma SOBREPOSIÇÃO
                $r->locomover(); // rastejando
                $r->alimentar(); // comendo vegetais
                print_r($r);


                $dog = new Cachorro;
                $dog->abanarRabo();

            ?>
        </pre>
    </div>
    
</body>
</html>