<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Classes e Objetos</title>
</head>

<body>
    <div>
        <h3>Classes e Objetos</h3>
        <?php
            require_once 'Caneta.php';

            $obj01 = new Caneta; // instanciando um objeto
            $obj01->cor = "Azul"; // definindo os atributos
            $obj01->ponta = 0.5;
            $obj01->tampada = false;

            // vai chamar o método tampar() e obj01 vai receber tampada como true
            $obj01->tampar();                        
            $obj01->rabiscar();
            print_r($obj01);

            echo "<hr>";

            // instanciação de novo objeto a partir da mesma classe
            $obj02 = new Caneta; 
            $obj02->cor = "Vermelho";
            $obj02->carga = 60;
            $obj02->tampada = true;

            $obj02->destampar();
            $obj02->rabiscar();
            print_r($obj02);

            echo "<hr>";

            // criando objeto próprio
            require_once 'Treino.php';
            $treinoA = new Treino;
            $treinoA->musculo = "Peito";
            $treinoA->volume = 5;
            $treinoA->intervalo = 30;
            $treinoA->duracao = 60;
            $treinoA->tecnicaAvancada = false;
            $treinoA->carga = 20;

            $treinoA->aumentarCarga(); //aumenta a carga em 10%
            $treinoA->tecnicaAvancada();
            print_r($treinoA);

        ?>
    </div>
</body>

</html>