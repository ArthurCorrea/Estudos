<!-- 
1 - Crie um script index.php
2 - Defina duas variáveis: seu nome e seu sobrenome
3 - Numa estrutura HTML, apresente um título estático do tipo h3 com o texto "Meu nome é: "
4 - Apresenta numa tag h1 o nome completo a partir das variáveis iniciadas no ponto 2
-->

<?php
    $nome = "Arthur";
    $sobrenome = "Corrêa"; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
</head>

<body>
    
    <h3>Meu nome é: </h3>
    <h1>
        <?= "$nome $sobrenome" ?>
    </h1>

</body>

</html>

