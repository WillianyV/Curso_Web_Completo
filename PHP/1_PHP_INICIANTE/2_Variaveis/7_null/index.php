<?php
    $_nome = "";
    $_telefone = "null";

    
    $_idade = null;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo "o nome é nulo? " . is_null($_nome) . "<br/>";
            echo "o telefone é nulo? " . is_null($_telefone) . "<br/>";
            echo "a idade é nula? " . is_null($_idade) . "<br/>";
        ?>
    </body>
</html>