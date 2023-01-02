<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Operadores de atribuição</title>
</head>

<body>
    <div>
        <h1>Operadores de atribuição</h1>
        <?php 
            $preco = $_GET["p"];
            echo "O preço do produto é R$". number_format($preco, 2, ","). "<br>";

            $preco += ($preco * 10 / 100);
            echo "O novo preço do produto com 10% de aumento será R$". number_format($preco, 2, ",");
        
            
            $ano_atual = $_GET["a"];
            echo "<br>Ano atual: $ano_atual <br> Ano anterior: ". --$ano_atual;
            echo "<br>Ano que vem: ". $ano_atual+=2;

            // variáveis por referência
            $a = 3;
            $b = &$a;

            echo "<br>$b<br>";

            // variáveis de variáveis
            $x = "abc";
            $$x = "def";
            echo "Conteúdo da variável x: $x";
            echo "<br>Conteúdo da variável criada: $abc";
        ?>  
    </div>    
</body>

</html>