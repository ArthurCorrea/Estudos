<?php

# WHILE - a condição é avaliada antes do ciclo

echo '<strong>WHILE:</strong>';
echo '<br>';

$a = 1;
while ($a <= 10){
    echo "Número: $a<br>";
    $a++;                 // adiciona uma unidade no final
}

echo '<br>';

// também dá pra fazer assim
$b = 21;
while ($b <= 30) echo 'Número: ' . $b++ . '<br>';
    
echo '<hr>';



# DO WHILE - a condição é avaliada depois do ciclo

echo '<strong>DO WHILE:</strong> ';
echo '<br>';

$c = 31;
do {
    echo 'Número: ' . $c++ . '<br>';
} while ($c <= 40);

echo '<hr>';



# FOR 

echo '<strong>FOR:</strong>';
echo '<br>';

//  iniciador, condição, incremento
for ($d = 41; $d <= 50 ; $d++) { 
    echo "Número: $d <br>";
}

echo '<br>';

// também é possível usar mais uma variável dentro do FOR

for ($contador = 1, $x = 10; $contador <= 10; $contador++, $x--) { 
    echo "Número: $x <br>";
}

echo '<br>';

// Mostrando dados de um array

$cidades = ['São Paulo', 'Brasília', 'Rio de Janeiro'];
for ($i = 0; $i < sizeof($cidades); $i++) { 
    echo $cidades[$i] . '<br>';
}

echo '<hr>';



# FOREACH - usado para fazer iterações nos valores de arrays

echo '<strong>FOREACH:</strong>';
echo '<br>';

$nomes = ['Arthur', 'Lucas', 'Pedro', 'Ana'];

foreach ($nomes as $nome_atual) {
    echo "O nome é $nome_atual.<br>";
}

// Pegando valores de arrays associativos

$países = [
    'Brasil' => 'Brasília',
    'EUA' => 'Washington',
    'Portugal' => 'Lisboa'
];

echo '<br>';

foreach ($países as $país => $capital) {
    echo "No $país a capital é $capital.<br>";
}

echo '<hr>';


# BREAK, CONTINUE E GOTO

// BREAK - serve para interromper a execução de um loop

echo '<strong>BREAK:</strong>';
echo '<br>';

for ($i = 0; $i < 15; $i++) {   // sem o break, iria até 15
    echo "Número: $i" . '<br>';
    if ($i == 10){
        break;          // interrompe o ciclo quando chegar em 10
    }
}

echo '<br>';

$nomes_de_exemplo = ['Cleiton', 'Robson', 'Marta'];

foreach ($nomes_de_exemplo as $nomes_pra_mostrar) { 
    echo "Nome atual: $nomes_pra_mostrar <br>";
    if ($nomes_pra_mostrar == 'Robson'){
        break;          // interrompe o ciclo no Robson
    }
}

echo '<hr>';


// CONTINUE - Avança uma volta no loop e ignora o código que deveria ser executado

echo '<strong>CONTINUE:</strong>';
echo '<br>';

for ($i = 0; $i <= 10; $i++) { 
    if ($i == 5){       // o 5 vai ser ignorado
        continue;
    }
    echo "Número: $i <br>";
}

echo '<br>';

foreach ($nomes_de_exemplo as $nomes_pra_mostrar) {
    if ($nomes_pra_mostrar == 'Robson'){    // o Robson vai ser ignorado
        continue;
    }
    echo "Nome atual: $nomes_pra_mostrar <br>";
}

echo '<hr>';


// GOTO - Pula a linha e vai para uma linha de código pré-definida por um label com :

echo '<strong>GOTO:</strong>';
echo '<br>';

for ($i = 0; $i < 15; $i++) { 
    if ($i == 10){
        goto linha161;
    }
    echo "Número atual: $i<br>";
}

linha161:
echo '<strong>Aqui é o label.';