<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Getters, Setters e Construct</title>
</head>

<body>
    <div>
        <h3>Getters, Setters e Construct</h3>
        <pre>
            <?php
                require_once 'Caneta.php';

                $c1 = new Caneta("Bic", "Azul", "1.0");
                // $c1->setModelo("BIC Cristal");
                // $c1->setPonta(0.5);
                print_r($c1);
                echo "<p>Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}</p>";

                
                $c2 = new Caneta("Faber", "Vermelha", "0.5");
                print_r($c2);


            ?>
        </pre>
    </div>
</body>

</html>