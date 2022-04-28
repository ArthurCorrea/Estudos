<?php

# IF 
$meunome = 'Arthur';

if ($meunome == 'Arthur'){
    echo 'Eis o cara que tá estudando PHP.';
}

echo '<br>';



# IF... ELSE

$idade = 15;

if ($idade >= 18){
    echo 'Você é adulto.';
} else {
    echo 'Você é adolescente.';
}

echo '<br>';



# IF... ELSEIF... ELSE

$nota = 10;

if ($nota <= 3){
    echo 'Reprovado!';
} elseif ($nota <= 6){
    echo 'Recuperação!';
} elseif ($nota <= 9){
    echo 'Aprovado!';
} else {
    echo 'Nota excelente! Parabéns!';
}

echo '<br>';



# CONDIÇÕES DENTRO DE CONDIÇÕES

$número = 15;

if ($número == 0 || $número == ''){
    echo 'Número nulo.';
} elseif ($número < 0){
    echo 'Número negativo.';
} else {
    if ($número == 20){
        echo 'O número é 20.';
    } else { 
        echo 'O número não é 20.';
    } 
}

echo '<br>';



# SWITCH 

$outronome = 'lucas';

switch ($outronome){    
    case 'Arthur':  
        echo 'Olá, Arthur!';
        break;
    case 'Lucas':
    case 'lucas':       // alternativa 
        echo 'Salve, Lucas!';
        break;
    default:
        echo 'Não te conheço.';
        break;
} 

echo '<br>';



# OPERADOR TERNÁRIO

$opção = 0;

$nome = $opção == 0 ? 'Arthur' : 'Lucas'; //como a variável $opção recebe o valor 0, o valor de $nome será 'Arthur'.
echo $nome;

echo '<br>';

$opção == 1 ? $nome = 'Pedro' : $nome = 'João'; //nesse caso, se a opção for 1, a variável $nome vai receber o valor 'Pedro'. Se for 0, vai receber o valor 'João'.

echo $nome;

?>


<!-- Dá pra usar o operador ternário no HTML-->
<h2><?= $opção == 1 ? 'Sim' : 'Não'?></h2>

<!-- Dá pra usar o operador ternário também no CSS -->

<h2 style="color: <?= $opção == 1 ? 'red' : 'blue' ?>"> TEXTO TEXTO</h2>

<hr>




<?php 

# MATCH

$x = 15;

echo match($x) {
    5 => 'O X é 5.',
    10 => 'O X é 10.',
    15 => 'O X é 15.',
    default => 'Número diferente.'
};
echo '<br>';

// é possível executar a mesma operação para várias condições

$x = 5;

$opcao = match($x){
    2 => 'O X é 2.',
    4, 5, 6 => 'O X é 4, 5 ou 6.',
    default => 'É outro valor.'
};
echo $opcao;

// no Match, as comparações são feitas por valor e tipo (===)

?>