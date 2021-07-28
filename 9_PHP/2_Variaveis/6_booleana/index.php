<?php
    $_fumante = false;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "É fumante? " . $_fumante . "<br/>";
            echo "É var é booleana? " . is_bool($_fumante) . "<br/>";
        ?>
    </body>

</html>