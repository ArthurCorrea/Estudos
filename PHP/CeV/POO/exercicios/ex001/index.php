<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Bancária</title>
</head>

<body>
    <pre>
        <?php
            require_once 'ContaBancaria.php';
            $conta01 = new ContaBancaria;
            
            // dados básicos da conta
            // Ordem -> dono, número da conta e tipo da conta
            $conta01->abrirConta('Lucas Correa', 12345, 'CP');

            
            // funções que a conta bancária tem
            $conta01->depositar(30);
            $conta01->depositar(200);

            $conta01->sacar(210);
            $conta01->fecharConta();
            $conta01->sacar(50);
            $conta01->pagarMensalidade();
            $conta01->pagarMensalidade();
            $conta01->sacar(8);

            // $conta01->fecharConta();
            print_r($conta01);

            echo "<hr>";


            $conta02 = new ContaBancaria;
            $conta02->abrirConta('Arthur', 312123, 'CP');

            print_r($conta02);

        ?>
    </pre>
</body>

</html>