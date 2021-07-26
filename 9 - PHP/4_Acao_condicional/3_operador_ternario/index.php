<?php 
    $_idade = 17;
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
            echo "É maior de idade: " . (($_idade>17)? "SIM" : "NÂO");
        ?>
    </body>
</html>