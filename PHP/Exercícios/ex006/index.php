<!---
1- Defina as variáveis nome e sobrenome com os respectivos valores
2 - Apresente o nome completo num parágrafo HTML
3 - No segundo parágrafo apresente o seguinte:
    "O meu nome tem X caracteres."
    Sendo o X o cálculo do total de caracteres do seu nome.*/
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
    <title>Exercício 06</title>
</head>

<body>
    <p> <?= "$nome $sobrenome"?></p>
    <p> <?= "O meu nome tem " . strlen($nome) + mb_strlen($sobrenome) . " caracteres."?></p>
</body>

</html>
