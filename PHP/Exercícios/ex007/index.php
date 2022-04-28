<!---
1- Defina as variáveis nome e sobrenome com os respectivos valores
2 - Numa página HTML simples, apresente o texto dentro de um parágrafo:
    "O meu nome é XXXX e meu sobrenome é XXXXXX."
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
    <title>Exercício 007</title>
</head>

<body>
    <p>
        <?= "O meu nome é ". strtoupper($nome) . " e meu sobrenome é " . mb_strtoupper($sobrenome) ?> 
    </p>
</body>

</html>