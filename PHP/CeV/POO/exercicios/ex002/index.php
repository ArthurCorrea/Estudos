<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <pre>
            <?php
                require_once 'Video.php';
                require_once 'Pessoa.php';
                require_once 'Gafanhoto.php';
                require_once 'Visualizacao.php';
                $v[0] =  new Video('Video de PHP');
                $v[1] =  new Video('Video de JavaScript');
                $v[2] =  new Video('Video de C++');

                $v[2]->like();
                print_r($v);

                $g[0] = new Gafanhoto('Arthur', 19, 'M', 'arthurzin');
                $g[0]->assistirMaisUm();
                $g[0]->assistirMaisUm();
                $g[0]->assistirMaisUm();
                $g[0]->ganharXP(7);
                print_r($g);

                // Arthur assiste Video de C++
                $vis[0] = new Visualizacao($g[0], $v[2]);
                print_r($vis);
            ?>
        </pre>
    </div>
</body>
</html>