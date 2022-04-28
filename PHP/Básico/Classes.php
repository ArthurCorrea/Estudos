<?php

# CLASSES E INTRODUÇÃO À PROGRAMAÇÃO ORIENTADA A OBJETOS

class Classe {

    // propriedades e métodos

}

// Propriedades - variáveis que guardam características do objeto
// Métodos - funções que definem o que o objeto pode fazer



# INSTANCIAÇÃO - Criação de um objeto a partir de uma classe

class Humano01 {

    public $nome = 'Arthur';            // propriedade
    public $sobrenome = 'Corrêa';

    public function nomeCompleto(){     //método
        return $this->nome . ' ' . $this->sobrenome; 
    }
}

$eu = new Humano01();

echo $eu->nomeCompleto();    // Arthur Corrêa
echo '<br>';



# CONSTRUCTOR
// Método especial dentro de uma classe que é sempre executado automaticamente quando é criado um objeto a partir de uma classe

class Humano02 {

    private $nome;
    private $sobrenome;

    function __construct($n, $s){
        $this->nome = $n;
        $this->sobrenome = $s;
    }

    public function nomeCompleto(){
        return $this->nome . ' ' . $this->sobrenome;
    }
}

$homem = new Humano02('Arthur', 'Vinícius');
$mulher = new Humano02('Nicoly', 'Aldrin');

echo $homem->nomeCompleto();
echo '<br>';
echo $mulher->nomeCompleto();

echo '<br>';



# PROPERTY PROMOTION - ainda usando o CONSTRUCT

class Humano03 {

    function __construct(public $nome, public $sobrenome){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
    }
}

$h1 = new Humano03('Cleiton', 'Silva');

echo $h1->nome . ' ' . $h1->sobrenome;
echo '<br>';



# CLASSES ANÔNIMAS

$a = new class{

    function teste(){
        echo 'Olá';
    }
};

$a->teste();
echo '<br>';



# HERANÇA

// Mecanismo que permite criar classes que herdam propriedades e métodos de outra classe

class Animais {

    public $espécie;
    public $tamanho;

    function tipoEspécie(){
        return "Este animal é da espécie {$this->espécie}";
    }
}

// importa as propriedades e métodos da classe Animais
class Mamíferos extends Animais { 

    public $número_pernas;

    function quantasPernas(){
        return "O animal da espécie {$this->espécie} tem {$this->número_pernas} pernas.";
    }
}

$mamífero = new Mamíferos();
$mamífero->espécie = 'cachorro';
$mamífero->número_pernas = 4;

echo $mamífero->quantasPernas();
echo '<br>';



# OVERRRIDING
// Mecanismo que permite a uma classe derivada ter métodos reescritos especificamente para a classe em questão

// Exemplo prático

class Retângulo {

    public $largura, $altura;

    function __construct($l, $a){
        $this->largura = $l;
        $this->altura = $a;
    }

    function calcularArea(){
        return $this->largura * $this->altura;
    }

}

class Quadrado01 extends Retângulo {

    // o método foi reescrito p/ se adequar ao propósito da classe, já que um quadrado é diferente de um retângulo

    function __construct($l){   
        $this->largura = $l;
        $this->altura = $l;
    }
    // o método calcularArea() permanece o mesmo
}

$retângulo = new Retângulo(5, 3);
echo $retângulo->calcularArea();

echo '<br>';

$quadrado01 = new Quadrado01(5);
echo $quadrado01->calcularArea();

echo '<br>';


// Também existe a expressão parent, que permite simplificar a escrita

class Quadrado02 extends Retângulo {

    // herdando da classe pai (Retângulo)
    function __construct($l)    {
        Retângulo::__construct($l, $l);   
    }
}

$quadrado02 = new Quadrado02(10);
echo $quadrado02->calcularArea();



# ACCESS LEVELS 
// existem 3 tipos de níveis de acesso a elementos dentro de uma classe: public, protected e private

class Classe_de_exemplo {

    public $v1;
    protected $v2;
    private $v3;

}

$a = new Classe_de_exemplo();
$a->v1 = '111';             // é possível
//$a->v2 = '222';             // não é possível
//$a->v3 = '333';             // não é possível

// Public - estão sempre acessíveis, contanto que criemos um objeto a partir da classe.

// Protected - pode ser acessível dentro da classe e dentro de qualquer classe que seja uma extensão de outra classe

// Private - só é acessível dentro da própria classe onde é definida

echo '<br>';



# STATIC
// pode ser usada para declarar propriedades e métodos de uma classe que podem ser acedidos sem que seja necessário criar um objeto a partir dessa classe

class Operações {

    static $valor1, $valor2;

    static function adicionar(){
        return self::$valor1 + self::$valor2;
    }

    static function multiplicar(){
        return Operações::$valor1 * Operações::$valor2;
    }

    static function númeroAleatório($min, $max){
        return rand($min, $max);
    }

    static function criarNome(){

        $nomes = ['Arthur', 'Lucas', 'Pedro', 
        'Cleitu', 'João', 'Ana', 'Maria', 'Lúcia'];

        $sobrenomes = ['Silva', 'Corrêa', 'Costa', 
        'Marcelo', 'Carvalho', 'Madeira', 'Ballout'];

        return $nomes[rand(0, count($nomes)-1)] . ' ' . $sobrenomes[rand(0, count($sobrenomes)-1)];

    }

}

Operações::$valor1 = 320;
Operações::$valor2 = 50;

echo 'Resultado: ' . Operações::adicionar();
echo '<br>';
echo 'Resultado: ' . Operações::multiplicar();
echo '<br>';
echo "Número aleatório: " . Operações::númeroAleatório(10, 100);
echo '<br>';
echo 'Nome completo: '. Operações::criarNome();

echo '<br>';



# CONSTANTS, DEFINE E DEFINED 

// Constants - variáveis cujo valor não pode ser alterado ao longo do script, são públicas e são geralmente usadas no contexto das classes

class Círculo {

    const PI = 3.14;    // não precisa do $

}

echo Círculo::PI;
echo '<br>';


// Define - permite definir constants globais e locais, mas não pode ser usada dentro do contexto de uma classe e deve ter dois parâmetros

//      variável,   valor
define('APP_NAME', 'Aplicativo top'); 
define('PI', 3.14);

echo APP_NAME;
echo '<br>';
echo PI;
echo '<br>';


// Defined - parecido com o define, mas com um tipo de verificação. Geralmente é usado assim:

// "se NÚMERO não estiver definido, então defina" 
defined('NÚMERO') or define ('NÚMERO', 50);
echo NÚMERO;

echo '<br>';


// Define com arrays

define('NOMES', ['Arthur', 'Pedro', 'João']);
echo NOMES[1];

echo '<br>';



# CONSTANTES MÁGICAS
// Geralmente usadas para debugar o código

// indica o número da linha de código no script
echo __LINE__ . '<br>'; 

//identifica o caminho completo do script
echo __FILE__ . '<br>';

// identifica a pasta onde o script está alojado
echo __DIR__ . '<br>';

Este_nome_vai_aparecer();
function Este_nome_vai_aparecer(){
    $a = true;
    echo __FUNCTION__ . '<br>';     // indica o nome da função 
}

class Teste{
    function identicar(){
        echo __CLASS__ . '<br>';    // nome da classe
        echo __METHOD__ . '<br.';   // nome do método
    }
}

$a = new Teste();
$a->identicar();

//  __TRAIT__      usado na reutilização de código

echo __NAMESPACE__;        // indica o nome do namespace atual

echo '<br>';



# CLASSES ABSTRATAS
// constituída por uma implementação parcial que permite que outras classes cresçam
// Quando uma classe abstrata é declarada, significa que ela tem métodos incompletos que devem ser implementados nas classes que as heram
// Não servem para ser instanciadas, então só servem para serem herdadas por outras classes

echo '<br>';

abstract class Forma{

    public $largura = 100;
    public $altura = 50;

    abstract public function area();

    function altura(){
        return $this->altura;
    }

}

class Rectangule extends Forma{

    public function area(){
        return $this->largura * $this->altura;
    }

}

$rec = new Rectangule();
echo $rec->area();
echo '<br>';
echo $rec->altura();