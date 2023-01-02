<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Estrutura de repetição</title>
</head>
<body>
    <div>
        <?php
            for($i = 1; $i <= 10; $i++) { 
                echo "$i ";
            }
            echo "<hr>";
            for($i = 10; $i >= 1; $i--) {
                echo "$i ";
            }
            echo "<hr>";
            for($i = 10; $i <= 50; $i += 5) {
                echo "$i ";
            }
            echo "<hr>";
            for($i = 30; $i >= 10; $i -= 2){
                echo "$i ";
            }
            echo "<hr>";
        ?>

        <form method="get" action="ex01.php">
            Mostrar tabuada de:
            <select name="numero">
                <?php
                    for($i = 1; $i <= 10; $i++){
                        echo "<option>$i</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Enviar">
        </form>

    </div>
</body>
</html>