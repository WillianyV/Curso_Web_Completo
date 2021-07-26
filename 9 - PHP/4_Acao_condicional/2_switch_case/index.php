<?php
    $_dia_atual = "Segunda" 
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
            switch($_dia_atual){
                case "Segunda":
                    echo "Hoje é Segunda";
                    break;
                case "Terça":
                    echo "Hoje é Terça";
                    break;
                case "Quarta":
                    echo "Hoje é Quarta";
                    break;
                case "Quinta":
                    echo "Hoje é Quinta";
                    break;
                case "Sexta":
                    echo "Hoje é Sexta";
                    break;
                case "Sábado":
                    echo "Hoje é Sábado";
                    break;
                case "Domingo":
                    echo "Hoje é Domingo";
                    break;

            }
        ?>
    </body>
</html>