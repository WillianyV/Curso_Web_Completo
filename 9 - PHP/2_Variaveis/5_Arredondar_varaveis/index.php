<?php
    $_gasolina = 4.5;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            //arredondar para media
            echo round($_gasolina) . "<br/>";
            //arrendondadar para cima
            echo ceil($_gasolina) . "<br/>";
            //arredondar para baixo
            echo floor($_gasolina) . "<br/>";
        ?>

    </body>
</html>