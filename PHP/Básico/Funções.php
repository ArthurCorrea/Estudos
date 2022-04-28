<?php

# São usadas para definir rotinas que poderão ser reutilizadas ao longo do projeto

function função_01(){
    echo 'Função 01 definida.<br>';
}

função_01();

function função_02(){
    echo 'Função 02 definida.<br>';
}

função_02();

echo '<hr>';



# PARÂMETROS

function adição($n1, $n2){
    echo "$n1 + $n2 = " . ($n1 + $n2);
    echo '<br>';
}

adição(20, 30);    // 20 será armazenado em n1 e 30 será armazenado em n2 dentro da função adição()

adição(872, 1645); // dá-se o nome desses dois números de argumentos

echo '<hr>';


// Usando em arrays

$nomes = ['Arthur', 'Lucas', 'Pedro'];

foreach ($nomes as $nome) {
    olá($nome); 
}

function olá($valor_atual){
    echo 'Bom dia, '. $valor_atual . '!<br>';
}

echo '<hr>';


// Parâmetros opcionais - o parâmetro com o sinal de igualdade pode ou não ser passado


function substração($n1, $n2 = 6){  // n2 agora é opcional
    echo "$n1 - $n2 = " . ($n1 - $n2);
    echo '<br>'; 
}

substração(10);         // n1 vale 10 e n2 vale 6
substração(20, 10);     // n1 vale 20 e agora n2 vale 10

// os parâmetros opcionais devem ser sempre declarados após os parâmetros obrigatórios

echo '<hr>';


# NAMED ARGUMENTS - foi adicionado no PHP 8

function função_03($a, $b = 10, $c = 40){
    echo $a + $b + $c;
    echo '<br>';
}
     
função_03(500, c: 300);     // a = 500  b = 10  c = 300
// é possível alterar somente o valor de c

função_03(b: 200, c: 100, a: 420);  // também dá pra alterar a ordem dos argumentos

echo '<hr>';



# FUNÇÕES ESPECIAIS (pouco comuns)

function função_04(){       // os parâmetros são passados dentro da função

    $a = func_get_arg(0);
    $b = func_get_arg(1);
    $c = func_get_arg(2);

    echo "$a, $b, $c";
    echo '<br>';

    echo func_num_args();   // mostra a quantidade de argumentos
}

função_04(1, 2, 3, 4);

echo '<hr>';

function função_05(...$nomes){ 
    foreach ($nomes as $valor_atual) {
        echo "Olá, $valor_atual!<br>";
    }
}

função_05('Arthur', 'Lucas', 'Pedro', 'Ana', 'Nicoly');   // é possível adicionar infinitos argumentos

echo '<hr>';



# RETURN - retorna um valor ou interrompe a execução do código e retorna pra onde foi feita a chamada

function função_06($a, $b){
    
    return $a + $b;
}

echo função_06(1, 2);

echo '<br>';

// outro exemplo

$nome = 'Arthur';

if(avaliar_nome($nome)){
    echo 'Nome certo.';
}

function avaliar_nome($n){
    if ($n == 'Arthur'){
        return true;
    } else  {
        return false;
    }
}

echo '<hr>';



# FUNÇÕES ANÔNIMAS - não possuem nome, então são definidas a partir de uma variável

$variável = function(){
    echo 'Esta função é definida por uma variável.';
};

$variável();

echo '<br>';


// outro exemplo

$falar = function($mensagem){
    echo "Mensagem: $mensagem";
    echo '<br>';
};

$falar('Salve!');
$falar('Que legal isso aqui.');


// mais um exemplo

$correr = function($km){
    return "Eu corri $km quilômetros.";
};

echo $correr(100);

echo '<hr>';



# FUNÇÕES CLOSURE - funções anônimas que podem usar variáveis de escopo global

$x = 10;
$y = 20;

$função_closure = function($z) use($x, $y){

    echo "Números: $x - $y - $z";

};

$função_closure(5); // z terá o valor de 5, x e y continuarão sem alteração

echo '<br>';



# ARROW FUNCTIONS

$x = 30;
$y = 50;

$arrow_function = fn($z) => "Números: $x - $y - $z";

echo $arrow_function(10);

echo '<hr>';



# GENERATORS

function gerador(){
    for($i = 0; $i <= 10; $i++){
        yield $i;   // o yield permite continuar a função
    }
}

foreach (gerador() as $número) {
    echo "$número ";
}

echo '<br>';

// yield from - permite pegar valores de um array, por exemplo

function nomes(){
    yield from ['Arthur', 'Pedro', 'João'];
}

foreach (nomes() as $nome_atual) {
    echo "$nome_atual<br>";
}
