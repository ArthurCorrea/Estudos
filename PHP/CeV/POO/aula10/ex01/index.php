<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Herança</title>
</head>

<body>
    <div>
        <pre>
            <?php
                require_once 'Pessoa.php';
                require_once 'Aluno.php';
                require_once 'Professor.php';
                require_once 'Funcionario.php';
                $p1 = new Pessoa('Arthur', 19, 'M');
                $p2 = new Aluno('Lucas', 14, 'M');
                $p3 = new Professor('Rodrigo', 30, 'M');
                $p4 = new Funcionario('Claudia', 33, 'F');
                
                $p2->setNome('Pedro');
                $p2->setMatricula(3412);
                $p2->setCurso('TI');
                print_r($p2);

                $p3->setSalario(2500);
                $p3->receberAumento(400);
                print_r($p3);
            ?>
        </pre>
    </div>
</body>

</html>