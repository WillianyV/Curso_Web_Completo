<?php 
    $_salario = 1100;
    $_meses   = 12;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo "Salario anual: ". $_salario * $_meses . "</br>";
            echo "Salario quizena: ". $_salario /2 . "</br>";

            // Exponencial
            echo "Exponencial: " . pow(6,2) . "</br>";

            // Raiz Quadrada
            echo "Raiz quadrada: " . sqrt(36) . "</br>";

            // Randômico Generica
            echo "Randomico: " . rand() . "</br>";
            echo "Randomico com intervalo: " . rand(1,25) . "</br>";

            // Valor absoluto (sempre positivo)
            echo "Numero absoluto: " . abs(-20);
            
        ?>
    </body>
</html>