<?php

$valores = [1, 2, 3, 4, 5];
$nomes = ['Arthur', 'Lucas', 'Pedro'];

echo $valores[2];
echo $nomes[1];
echo '<br>';


// Arrays começam pelo índice 0


# NÃO PRECISA TER CHAVES SEQUENCIAIS

$dados = [
    10 => 1000,     // O índice 10 vai ter o valor 1000
    20 => 2000,     // O índice 20 vai ter o valor 2000
    30 => 3000      // O índice 30 vai ter o valor 3000
];
echo $dados[10];
echo '<br>';



# TAMBÉM DÁ PRA ADICIONAR UM VALOR NO FINAL DO ARRAYM AÍ ELE VAI ASSUMIR O ÚLTIMO ÍNDICE +1

$dados[] = 4000;     // O índice 31 vai ter o valor 4000
echo $dados[31];
echo '<br>';



# É POSSÍVEL ALTERAR O VALOR DE UM ARRAY UASNDO SEU ÍNDICE

$números = [1, 2, 3, 4, 5];
$números[1] = 6;     // O número 2 no array agora é o número 6
echo $números[1];
echo '<br>';

# PARA USAR VALORES DE UM ARRAY DENTRE DE UMA STRING, PODE-SE FAZER DA SEGUINTE FORMA:

echo "Os valores são $números[2] e $dados[20].";
echo '<br>';



# ARRAYS ASSOCIATIVOS

$dados_do_cliente = [
    'nome' => 'Arthur',
    'email' => 'arthur@gmail.com',
    'telefone' => '123456789'
];
echo $dados_do_cliente['email'];    
echo '<br>';



# ARRAYS MISTOS

$maisdados = [
    'nome' => 'Lucas',
    'email' => 'lucas@gmail.com',
    1 => 5000,
    2 => 10000,
    3 => 'Rua Nacib Jorge',
    'telefone' => '123456789'
];
echo $maisdados[3];         // vai exibir Rua Nacib Jorge
echo $maisdados['nome'];    // vai exibir Lucas
echo '<br>';

// é mais díficil de gerir arrays desse tipo por conta da mistura de índices e dados



# ARRAYS MULTIDIMENSIONAIS

$exemplo = [
    [100, 200, 300, 400],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];
echo $exemplo[1][2];        // vai exibir o valor 7
echo $exemplo[0][1];        // vai exibir o valor 200
echo '<br>';

// Também pode-se usar arrays multidimensionais associativos

$cidades = [
    'Brasil' => ['Belo Horizonte', 'São Paulo', 'Brasília'],
    'EUA' => ['Washington', 'New York', 'Los Angeles'],
    'Espanha' => ['Madrid', 'Barcelona', 'Sevilha']
];
echo $cidades['Brasil'][2];     // vai exibir Brasília
echo $cidades['Espanha'][0];    // vai exibir Madrid

echo '<pre>';
var_dump($cidades);

var_dump($exemplo);


