<?php
    $_cont = 1;
    $_contador = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        while($_cont <= 6){
            echo rand(1,60) . " | ";
            $_cont++;
        }
        echo "<br/>";
    ?>
    <?php                    
        do{
            echo rand(1,60) . " | ";
            $_contador++;
        }while($_contador <=6);
    ?>
</body>
</html>