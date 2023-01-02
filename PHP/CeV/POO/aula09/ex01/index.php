<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Exercício 01</title>
</head>

<body>
    <div>
        <pre>
            <?php
                require_once 'Pessoa.php';
                require_once 'Livro.php';
                $p[0] = new Pessoa('Arthur', 22, 'M');
                $p[1] = new Pessoa('Coly', 18, 'F');
                $l[0] = new Livro('PHP', 'Eu mesmo', 300, $p[0]);
                $l[1] = new Livro('Python', 'Ele lá', 500, $p[1]);
                print_r($l[0]);

                $l[0]->detalhes();

            ?>
        </pre>
    </div>
</body>

</html>