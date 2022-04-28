<?php

$a = 'Strings com aspas únicas';
$b = "Strings com as duplas";
// Ambas são válidas

echo $a;
echo '<br>';
echo $b;  

echo '<br>';
// é importante usar sempre um modelo só de definição de strings ao longo do projeto.


# Concatenação de strings

$nome = 'Arthur' . ' ' . 'Vinícius'; // usa-se os pontos
echo $nome;

echo '<br>';

$sobrenome = 'Corrêa';
$sobrenome .= ' ' . 'da Costa';   //.= liga dois valores já existentes
echo $sobrenome;

echo '<br>';

$nome_completo = $nome . ' ' . $sobrenome;
echo $nome_completo;

echo '<br>';

echo $nome_completo = "$nome $sobrenome"; //pode-se usar aspas duplas para concatenar de uma vez só

echo '<br>';


# Caracteres de escape

// São usados para escrever caracteres especiais

$frase_1 = "I'm going to the John's \"The great\" Party!";
echo $frase_1;

echo '<br>';
// a \ é usado para usar caracteres especiais

$frase = 'Oi!';
echo $frase[0];



# Funções nativas para manipular strings

$frase_de_exemplo = "Uma frase aleatória de exemplo.";

// mostra o número de caracteres da string
$numero_caracteres = strlen($frase_de_exemplo); 

echo strlen('prova de python');

// mostra as letras a partir da posição 0 até a 3
$primeira_palavra = substr($frase_de_exemplo, 0, 3);


// converte toda a string para letras maiúsculas
$todas_maiusculas = strtoupper($frase_de_exemplo);


// converte toda a string para letras minúsculas
$todas_minusculas = strtolower($frase_de_exemplo);


// troca todas as letras 'a' por 'h' dentro da frase
$nova_letra = str_replace('a', 'h', $frase_de_exemplo);


// verifica a posição de um caracterer dentro da string
$posição = strpos($frase_de_exemplo, 'a');
