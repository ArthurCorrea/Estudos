<?php

# HereDoc - Permite parse de variáveis

$nome = 'Arthur Corrêa';
$email = 'arthur@gmail.com';
$telefone = 33123456789;

$texto = <<<LABEL
Olá, $nome! 
Seu e-mail é $email, juntamente com seu telefone $telefone
Obrigado.
LABEL;

echo $texto;

echo '<br>';

# NowDoc - Não permite parse de variáveis

$texto = <<<'LABEL'
Olá, $nome! 
Seu e-mail é $email, juntamente com seu telefone $telefone
Obrigado.
LABEL;

echo $texto;