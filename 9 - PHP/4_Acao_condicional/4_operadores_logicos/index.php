<?php 
    $_fumante = false;
    $_numero1 = 5;
    $_numero2 = "5";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            if($_fumante){
                echo "É fumente";
            }else{
                echo "Não é fumente";
            }

            echo "<br/>";
        ?>
        <?php
            // == comapra os valores
            // === compara os valores e o tipo
            if ($_numero1 === $_numero2) {
                echo "Tem valores iguais";
            } else {
                echo "São diferentes";
            }
            
        ?>
    </body>
</html>